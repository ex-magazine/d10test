!function(e,t){"object"==typeof exports&&"object"==typeof module?module.exports=t():"function"==typeof define&&define.amd?define([],t):"object"==typeof exports?exports.CKEditor5=t():(e.CKEditor5=e.CKEditor5||{},e.CKEditor5.embeddedParagraph=t())}(self,(()=>(()=>{var e={"ckeditor5/src/core.js":(e,t,r)=>{e.exports=r("dll-reference CKEditor5.dll")("./src/core.js")},"ckeditor5/src/engine.js":(e,t,r)=>{e.exports=r("dll-reference CKEditor5.dll")("./src/engine.js")},"ckeditor5/src/ui.js":(e,t,r)=>{e.exports=r("dll-reference CKEditor5.dll")("./src/ui.js")},"ckeditor5/src/widget.js":(e,t,r)=>{e.exports=r("dll-reference CKEditor5.dll")("./src/widget.js")},"dll-reference CKEditor5.dll":e=>{"use strict";e.exports=CKEditor5.dll}},t={};function r(a){var i=t[a];if(void 0!==i)return i.exports;var d=t[a]={exports:{}};return e[a](d,d.exports,r),d.exports}r.d=(e,t)=>{for(var a in t)r.o(t,a)&&!r.o(e,a)&&Object.defineProperty(e,a,{enumerable:!0,get:t[a]})},r.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t);var a={};return(()=>{"use strict";r.d(a,{default:()=>c});var e=r("ckeditor5/src/core.js"),t=r("ckeditor5/src/widget.js");class i extends e.Command{execute(e){const{model:t}=this.editor,r=this.editor.plugins.get("ParagraphsEmbedEditing"),a=Object.entries(r.attrs).reduce(((e,[t,r])=>(e[r]=t,e)),{}),i=Object.keys(e).reduce(((t,r)=>(a[r]&&(t[a[r]]=e[r]),t)),{});t.change((e=>{t.insertContent(function(e,t){return e.createElement("embeddedParagraph",t)}(e,i))}))}refresh(){const e=this.editor.model,t=e.document.selection,r=e.schema.findAllowedParent(t.getFirstPosition(),"embeddedParagraph");this.isEnabled=null!==r}}class d extends e.Plugin{static get requires(){return[t.Widget]}init(){this.attrs={embeddedParagraphPluginType:"data-embed-button",embeddedParagraphId:"data-paragraph-id",embeddedParagraphRevisionId:"data-paragraph-revision-id",embeddedParagraphLabel:"data-entity-label"};const e=this.editor.config.get("embeddedParagraph");e&&(this.options=e,this.labelError=Drupal.t("Preview failed"),this.previewError=`\n      <p>${Drupal.t("An error occurred while trying to preview the embedded content. Please save your work and reload this page.")}<p>\n    `,this._defineSchema(),this._defineConverters(),this.editor.commands.add("insertParagraphEmbed",new i(this.editor)))}_defineSchema(){this.editor.model.schema.register("embeddedParagraph",{allowWhere:"$block",isObject:!0,isContent:!0,isBlock:!0,allowAttributes:Object.keys(this.attrs)}),this.editor.editing.view.domConverter.blockElements.push("drupal-paragraph")}_defineConverters(){const{conversion:e}=this.editor;e.for("upcast").elementToElement({model:"embeddedParagraph",view:{name:"drupal-paragraph"}}),e.for("dataDowncast").elementToElement({model:"embeddedParagraph",view:{name:"drupal-paragraph"}}),e.for("editingDowncast").elementToElement({model:"embeddedParagraph",view:(e,{writer:r})=>{const a=r.createContainerElement("section",{class:"drupal-paragraph"});return r.setCustomProperty("embeddedParagraph",!0,a),(0,t.toWidget)(a,r,{label:Drupal.t("Paragraphs embed widget")})}}).add((e=>(e.on("attribute:embeddedParagraphId:embeddedParagraph",((e,t,r)=>{const a=r.writer,i=t.item,d=r.mapper.toViewElement(t.item);let n=this._getPreviewContainer(d.getChildren());if(n){if("ready"!==n.getAttribute("data-drupal-paragraph-preview"))return;a.setAttribute("data-drupal-paragraph-preview","loading",n)}else n=a.createRawElement("div",{"data-drupal-paragraph-preview":"loading"}),a.insert(a.createPositionAt(d,0),n);this._loadPreview(i).then((({label:e,preview:t})=>{n&&this.editor.editing.view.change((r=>{const a=r.createRawElement("div",{"data-drupal-paragraph-preview":"ready","aria-label":e},(e=>{e.innerHTML=t}));r.insert(r.createPositionBefore(n),a),r.remove(n)}))}))})),e))),Object.keys(this.attrs).forEach((t=>{const r={model:{key:t,name:"embeddedParagraph"},view:{name:"drupal-paragraph",key:this.attrs[t]}};e.for("dataDowncast").attributeToAttribute(r),e.for("upcast").attributeToAttribute(r)}))}async _loadPreview(e){const t={text:this._renderElement(e)},r=await fetch(Drupal.url("embed/preview/"+this.options.format+"?"+new URLSearchParams(t)),{headers:{"X-Drupal-EmbedPreview-CSRF-Token":this.options.previewCsrfToken}});if(r.ok){return{label:Drupal.t("Paragraph embed widget"),preview:await r.text()}}return{label:this.labelError,preview:this.previewError}}_renderElement(e){const t=this.editor.model.change((t=>{const r=t.createDocumentFragment(),a=t.cloneElement(e,!1);return t.append(a,r),r}));return this.editor.data.stringify(t)}_getPreviewContainer(e){for(const t of e){if(t.hasAttribute("data-drupal-paragraph-preview"))return t;if(t.childCount){const e=this._getPreviewContainer(t.getChildren());if(e)return e}}return null}static get pluginName(){return"ParagraphsEmbedEditing"}}var n=r("ckeditor5/src/ui.js");var o=r("ckeditor5/src/engine.js");class s extends o.DomEventObserver{constructor(e){super(e),this.domEventType="dblclick"}onDomEvent(e){this.fire(e.type,e)}}class l extends e.Plugin{static get requires(){return[n.ContextualBalloon]}init(){const e=this.editor,t=e.commands.get("insertParagraphEmbed"),r=e.config.get("embeddedParagraph");if(!r)return;const a=r.buttons,{dialogSettings:i={}}=r;Object.keys(a).forEach(((d,o)=>{e.ui.componentFactory.add(d,(o=>{const s=a[d],l=new n.ButtonView(o);return l.set({isEnabled:!0,label:s.label,icon:'<?xml version="1.0" standalone="no"?>\n<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 20010904//EN"\n "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">\n<svg version="1.0" xmlns="http://www.w3.org/2000/svg"\n width="16.000000pt" height="16.000000pt" viewBox="0 0 16.000000 16.000000">\n\n<g transform="translate(0.000000,16.000000) scale(0.100000,-0.100000)"\nfill="#000000" stroke="none">\n<path d="M43 153 c20 -2 54 -2 75 0 20 2 3 4 -38 4 -41 0 -58 -2 -37 -4z"/>\n<path d="M43 133 c20 -2 54 -2 75 0 20 2 3 4 -38 4 -41 0 -58 -2 -37 -4z"/>\n<path d="M7 114 c-4 -4 -7 -23 -7 -41 l0 -34 48 3 c47 3 47 3 47 38 0 34 -1\n35 -40 38 -23 2 -44 0 -48 -4z"/>\n<path d="M118 113 c6 -2 18 -2 25 0 6 3 1 5 -13 5 -14 0 -19 -2 -12 -5z"/>\n<path d="M123 43 c9 -2 23 -2 30 0 6 3 -1 5 -18 5 -16 0 -22 -2 -12 -5z"/>\n<path d="M48 23 c23 -2 59 -2 80 0 20 2 1 4 -43 4 -44 0 -61 -2 -37 -4z"/>\n<path d="M28 3 c18 -2 45 -2 60 0 15 2 0 4 -33 4 -33 0 -45 -2 -27 -4z"/>\n</g>\n</svg>\n',tooltip:!0}),l.bind("isOn","isEnabled").to(t,"value","isEnabled"),this.listenTo(l,"execute",(()=>{const t=this._getCurrentLibraryUrl(r)||Drupal.url("paragraph-embed/dialog/"+r.format+"/"+d);Drupal.ckeditor5.openDialog(t,(({attributes:t})=>{e.execute("insertParagraphEmbed",t)}),i)})),l}))}));const d=e.editing.view,o=d.document;d.addObserver(s),e.listenTo(o,"dblclick",((t,a)=>{const d=this._getCurrentLibraryUrl(r);d&&Drupal.ckeditor5.openDialog(d,(({attributes:t})=>{e.execute("insertParagraphEmbed",t)}),i)}))}static get pluginName(){return"ParagraphsEmbedUI"}_getCurrentLibraryUrl(e){const t=this.editor,r=t.editing.view.document.selection.getSelectedElement(),a=t.editing.mapper.toModelElement(r);if(a&&void 0!==a.name&&"embeddedParagraph"===a.name){const t=a.getAttribute("embeddedParagraphId"),r=a.getAttribute("embeddedParagraphRevisionId"),i=a.getAttribute("embeddedParagraphPluginType");let d=Drupal.url("paragraph-embed/dialog/"+e.format+"/"+i);return t&&(d+="/"+t),r&&(d+="/"+r),d}}}class p extends e.Plugin{static get requires(){return[d,l]}static get pluginName(){return"ParagraphsEmbed"}}const c={ParagraphsEmbed:p}})(),a=a.default})()));