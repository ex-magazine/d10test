There're 2 way to generate (clone) a new entity from this module

Approach 1: Drush, you can use drush command line like some sample bellow:

drush cee-ge 'custom_entity_example' 'we_company' 'custom-entity-example' 'company' 'custom_entity_template_example' 'company' 'CustomEntityExample' 'WeCompany' 'custom entity example' 'company' 'Custom Entity Example' 'Company'

drush cee-ge 'custom_entity_example' 'we_contact' 'custom-entity-example' 'contact' 'custom_entity_template_example' 'contact' 'CustomEntityExample' 'WeContact' 'custom entity example' 'contact' 'Custom Entity Example' 'Contact'

drush cee-ge 'custom_entity_example' 'we_message' 'custom-entity-example' 'message' 'custom_entity_template_example' 'message' 'CustomEntityExample' 'WeMessage' 'custom entity example' 'message' 'Custom Entity Example' 'Message'

drush cee-ge 'custom_entity_example' 'we_follow' 'custom-entity-example' 'follow' 'custom_entity_template_example' 'follow' 'CustomEntityExample' 'WeFollow' 'custom entity example' 'follow' 'Custom Entity Example' 'Follow'

drush cee-ge 'custom_entity_example' 'we_connect' 'custom-entity-example' 'connect' 'custom_entity_template_example' 'connect' 'CustomEntityExample' 'WeConnect' 'custom entity example' 'connect' 'Custom Entity Example' 'Connect'

drush cee-ge 'custom_entity_example' 'we_connect_request' 'custom-entity-example' 'connect-request' 'custom_entity_template_example' 'connect_request' 'CustomEntityExample' 'WeConnectRequest' 'custom entity example' 'connect request' 'Custom Entity Example' 'Connect Request'

drush cee-ge 'custom_entity_example' 'we_contribution' 'custom-entity-example' 'contribution' 'custom_entity_template_example' 'contribution' 'CustomEntityExample' 'WeContribution' 'custom entity example' 'contribution' 'Custom Entity Example' 'Contribution'

drush cee-ge 'custom_entity_example' 'we_activity' 'custom-entity-example' 'activity' 'custom_entity_template_example' 'activity' 'CustomEntityExample' 'WeActivity' 'custom entity example' 'activity' 'Custom Entity Example' 'Activity'

drush cee-ge 'custom_entity_example' 'we_notification' 'custom-entity-example' 'notification' 'custom_entity_template_example' 'notification' 'CustomEntityExample' 'WeNotification' 'custom entity example' 'notification' 'Custom Entity Example' 'Notification'

drush cee-ge 'custom_entity_example' 'we_settings' 'custom-entity-example' 'settings' 'custom_entity_template_example' 'settings' 'CustomEntityExample' 'WeSettings' 'custom entity example' 'settings' 'Custom Entity Example' 'Settings'

drush cee-ge 'custom_entity_example' 'we_group' 'custom-entity-example' 'group' 'custom_entity_template_example' 'group' 'CustomEntityExample' 'WeGroup' 'custom entity example' 'group' 'Custom Entity Example' 'Group'


Approach 2: UI, visit website at the url: 
	- admin/content/custom-entity-example-types/clone-form 
	- make sure the folder location is writable
	- input your module in the destination fields
	- Click on Generate


For both approaches, you will have your new module including the entity with essential functions to use for your projects.

	- You can see your manage entity content in /admin/content
	- You can see your manage entity structure in /admin/structure
