<?php

namespace Drupal\Tests\domain_content\Functional;

use Drupal\domain_access\DomainAccessManagerInterface;

/**
 * Creates domain admins and test which content lists they can access.
 *
 * @group domain_content
 */
class DomainContentPermissionsTest extends DomainContentTestBase {

  /**
   * Tests domain content permissions.
   */
  public function testDomainContentPermissions() {
    // This user should be able to see everything.
    $admin_user = $this->drupalCreateUser([
      'administer domains',
      'access administration pages',
      'access domain content',
      'access domain content editors',
      'publish to any domain',
      'assign editors to any domain',
    ]);
    $this->drupalLogin($admin_user);

    // Create users and content.
    $this->createDomainContent();
    $this->createDomainUsers();

    // Base Urls for our views.
    $urls = [
      'admin/content/domain-content',
      'admin/content/domain-editors',
    ];
    // Test the overview and domain-specific pages.
    foreach ($urls as $url) {
      $this->drupalGet($url);
      $this->assertSession()->statusCodeEquals(200);
      // Find the links.
      $this->findLink('All affiliates');
      foreach ($this->domains as $id => $domain) {
        $this->findLink($domain->label());
      }

      // All affiliates link.
      $this->drupalGet($url . '/all_affiliates');
      $this->assertSession()->statusCodeEquals(200);

      // Individual domain pages.
      foreach ($this->domains as $id => $domain) {
        $this->drupalGet($url . '/' . $id);
        $this->assertSession()->statusCodeEquals(200);
      }
    }
    // This user should be able to see everything but all affiliates.
    $limited_user = $this->drupalCreateUser([
      'administer domains',
      'access administration pages',
      'access domain content',
      'access domain content editors',
      'publish to any assigned domain',
      'assign domain editors',
    ]);
    $this->addDomainsToEntity('user', $limited_user->id(), array_keys($this->domains), DomainAccessManagerInterface::DOMAIN_ACCESS_FIELD);

    $this->drupalLogin($limited_user);
    // Test the overview and domain-specific pages.
    foreach ($urls as $url) {
      $this->drupalGet($url);
      $this->assertSession()->statusCodeEquals(200);
      // Find the links.
      $this->assertSession()->responseNotContains('All affiliates');
      foreach ($this->domains as $id => $domain) {
        $this->findLink($domain->label());
      }

      // All affiliates link.
      $this->drupalGet($url . '/all_affiliates');
      $this->assertSession()->statusCodeEquals(403);

      // Individual domain pages.
      foreach ($this->domains as $id => $domain) {
        $this->drupalGet($url . '/' . $id);
        $this->assertSession()->statusCodeEquals(200);
      }
    }

    // This user should be able to see everything but all affiliates and nothing
    // for editor assignments.
    $editor_user = $this->drupalCreateUser([
      'access administration pages',
      'access domain content',
      'publish to any assigned domain',
    ]);
    $this->addDomainsToEntity('user', $editor_user->id(), array_keys($this->domains), DomainAccessManagerInterface::DOMAIN_ACCESS_FIELD);

    $this->drupalLogin($editor_user);
    // Test the overview and domain-specific pages.
    foreach ($urls as $url) {
      $expected = 200;
      if ($url === 'admin/content/domain-editors') {
        $expected = 403;
      }
      $this->drupalGet($url);
      $this->assertSession()->statusCodeEquals($expected);
      // Find the links.
      $this->assertSession()->responseNotContains('All affiliates');
      foreach ($this->domains as $id => $domain) {
        if ($expected === 200) {
          $this->findLink($domain->label());
        }
        else {
          $this->findNoLink($domain->label());
        }
      }

      // All affiliates link will fail for both paths.
      $this->drupalGet($url . '/all_affiliates');
      $this->assertSession()->statusCodeEquals(403);

      // Individual domain pages.
      foreach ($this->domains as $id => $domain) {
        $this->drupalGet($url . '/' . $id);
        $this->assertSession()->statusCodeEquals($expected);
      }
    }

    // This user should be able to see one domain for editor assignments.
    $assigned_user = $this->drupalCreateUser([
      'access administration pages',
      'access domain content editors',
      'assign domain editors',
    ]);
    $ids = array_keys($this->domains);
    $assigned_id = end($ids);
    $this->addDomainsToEntity('user', $assigned_user->id(), [$assigned_id], DomainAccessManagerInterface::DOMAIN_ACCESS_FIELD);

    $this->drupalLogin($assigned_user);
    // Test the overview and domain-specific pages.
    foreach ($urls as $url) {
      $expected = 200;
      if ($url === 'admin/content/domain-content') {
        $expected = 403;
      }
      $this->drupalGet($url);
      $this->assertSession()->statusCodeEquals($expected);
      // Find the links.
      $this->assertSession()->responseNotContains('All affiliates');
      foreach ($this->domains as $id => $domain) {
        if ($expected === 200 && $id === $assigned_id) {
          $this->findLink($domain->label());
        }
        else {
          $this->findNoLink($domain->label());
        }
      }

      // All affiliates link will fail for both paths.
      $this->drupalGet($url . '/all_affiliates');
      $this->assertSession()->statusCodeEquals(403);

      // Individual domain pages.
      foreach ($this->domains as $id => $domain) {
        $this->drupalGet($url . '/' . $id);
        if ($expected === 200 && $id === $assigned_id) {
          $this->assertSession()->statusCodeEquals(200);
        }
        else {
          $this->assertSession()->statusCodeEquals(403);
        }
      }
    }
  }

}
