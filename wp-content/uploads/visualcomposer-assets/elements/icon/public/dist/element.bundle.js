(window.vcvWebpackJsonp4x=window.vcvWebpackJsonp4x||[]).push([[1],{"./icon/component.js":function(e,n,o){"use strict";Object.defineProperty(n,"__esModule",{value:!0});var t=u(o("./node_modules/babel-runtime/helpers/extends.js")),r=u(o("./node_modules/babel-runtime/core-js/object/get-prototype-of.js")),i=u(o("./node_modules/babel-runtime/helpers/classCallCheck.js")),l=u(o("./node_modules/babel-runtime/helpers/createClass.js")),a=u(o("./node_modules/babel-runtime/helpers/possibleConstructorReturn.js")),s=u(o("./node_modules/babel-runtime/helpers/inherits.js")),c=u(o("./node_modules/react/index.js"));function u(e){return e&&e.__esModule?e:{default:e}}var d=function(e){function n(){return(0,i.default)(this,n),(0,a.default)(this,(n.__proto__||(0,r.default)(n)).apply(this,arguments))}return(0,s.default)(n,e),(0,l.default)(n,[{key:"render",value:function(){var e="vce-features",n=this.props,o=n.atts,r=n.editor,i=n.id,l=o.iconPicker,a=o.iconUrl,s=o.shape,u=o.iconAlignment,d=o.size,v=o.customClass,f=o.toggleCustomHover,p=o.metaCustomId,h={},m={},g={},b="div",x="span",y=a.url,C=a.title,k=a.targetBlank,w=a.relNofollow,_="vce-icon-container "+l.icon;y?"none"!==s?(b="a",h={href:y,title:C,target:k?"_blank":void 0,rel:w?"nofollow":void 0}):(x="a",g={href:y,title:C,target:k?"_blank":void 0,rel:w?"nofollow":void 0}):(b="div",x="span"),s&&(e+=" vce-features--style-"+s),u&&(e+=" vce-features--align-"+u),d&&(e+=" vce-features--size-"+d),"string"==typeof v&&v&&(e+=" "+v);var H=this.getMixinData("iconColor");H&&(e+=" vce-icon--style--icon-color-"+H.selector),(H=this.getMixinData("shapeColor"))&&(e+=" vce-icon--style--shape-color-"+H.selector),(H=this.getMixinData("iconColorHover"))&&f&&(e+=" vce-icon--style--icon-color-hover-"+H.selector),(H=this.getMixinData("shapeColorHover"))&&f&&(e+=" vce-icon--style--shape-color-hover-"+H.selector),p&&(m.id=p);var j=this.applyDO("all");return c.default.createElement("div",(0,t.default)({className:e},r,m),c.default.createElement("div",(0,t.default)({id:"el-"+i,className:"vce vce-features-icon-wrapper"},j),c.default.createElement(b,(0,t.default)({className:"vce-features--icon vce-icon"},h),c.default.createElement("svg",{xmlns:"https://www.w3.org/2000/svg",viewBox:"0 0 769 769"},c.default.createElement("path",{strokeWidth:"25",d:"M565.755 696.27h-360l-180-311.77 180-311.77h360l180 311.77z"})),c.default.createElement(x,(0,t.default)({className:_},g)))))}}]),n}(u(o("./node_modules/vc-cake/index.js")).default.getService("api").elementComponent);n.default=d},"./icon/index.js":function(e,n,o){"use strict";var t=i(o("./node_modules/vc-cake/index.js")),r=i(o("./icon/component.js"));function i(e){return e&&e.__esModule?e:{default:e}}(0,t.default.getService("cook").add)(o("./icon/settings.json"),function(e){e.add(r.default)},{css:o("./node_modules/raw-loader/index.js!./icon/styles.css"),editorCss:o("./node_modules/raw-loader/index.js!./icon/editor.css"),mixins:{iconColor:{mixin:o("./node_modules/raw-loader/index.js!./icon/cssMixins/iconColor.pcss")},iconColorHover:{mixin:o("./node_modules/raw-loader/index.js!./icon/cssMixins/iconColorHover.pcss")},shapeColor:{mixin:o("./node_modules/raw-loader/index.js!./icon/cssMixins/shapeColor.pcss")},shapeColorHover:{mixin:o("./node_modules/raw-loader/index.js!./icon/cssMixins/shapeColorHover.pcss")}}},"")},"./icon/settings.json":function(e){e.exports={iconUrl:{type:"url",access:"public",value:{url:"",title:"",targetBlank:!1,relNofollow:!1},options:{label:"Icon URL"}},size:{type:"buttonGroup",access:"public",value:"medium",options:{label:"Size",values:[{label:"Tiny",value:"tiny",text:"XS"},{label:"Small",value:"small",text:"S"},{label:"Medium",value:"medium",text:"M"},{label:"Large",value:"large",text:"L"}]}},shape:{type:"dropdown",access:"public",value:"filled-circle",options:{label:"Background shape",values:[{label:"None",value:"none"},{label:"Square",value:"filled-square"},{label:"Square outline",value:"outlined-square"},{label:"Rounded",value:"filled-rounded"},{label:"Rounded outline",value:"outlined-rounded"},{label:"Circle",value:"filled-circle"},{label:"Circle outline",value:"outlined-circle"},{label:"Diamond",value:"filled-diamond"},{label:"Diamond outline",value:"outlined-diamond"},{label:"Hexagon",value:"filled-hexagon"},{label:"Hexagon outline",value:"outlined-hexagon"},{label:"Underline",value:"outlined-underlined"}]}},shapeColor:{type:"color",access:"public",value:"#3cb878",options:{label:"Shape color",cssMixin:{mixin:"shapeColor",property:"shapeColor",namePattern:"[\\da-f]+"},onChange:{rules:{shape:{rule:"!value",options:{value:"none"}}},actions:[{action:"toggleVisibility"}]}}},toggleCustomHover:{type:"toggle",access:"public",value:!1,options:{label:"Add hover effect"}},shapeColorHover:{type:"color",access:"public",value:"#3cb878",options:{label:"Shape hover color",cssMixin:{mixin:"shapeColorHover",property:"shapeColorHover",namePattern:"[\\da-f]+"},onChange:{rules:{shape:{rule:"!value",options:{value:"none"}},toggleCustomHover:{rule:"toggle"}},actions:[{action:"toggleVisibility"}]}}},iconColorHover:{type:"color",access:"public",value:"#fff",options:{label:"Icon hover color",cssMixin:{mixin:"iconColorHover",property:"iconColorHover",namePattern:"[\\da-f]+"},onChange:{rules:{toggleCustomHover:{rule:"toggle"}},actions:[{action:"toggleVisibility"}]}}},iconPicker:{type:"iconpicker",access:"public",value:{icon:"fa fa-video-camera",iconSet:"fontawesome"},options:{label:"Icon"}},iconColor:{type:"color",access:"public",value:"#fff",options:{label:"Icon color",cssMixin:{mixin:"iconColor",property:"iconColor",namePattern:"[\\da-f]+"}}},iconAlignment:{type:"buttonGroup",access:"public",value:"left",options:{label:"Icon alignment",values:[{label:"Left",value:"left",icon:"vcv-ui-icon-attribute-alignment-left"},{label:"Center",value:"center",icon:"vcv-ui-icon-attribute-alignment-center"},{label:"Right",value:"right",icon:"vcv-ui-icon-attribute-alignment-right"}]}},customClass:{type:"string",access:"public",value:"",options:{label:"Extra class name",description:"Add an extra class name to the element and refer to it from Custom CSS option."}},designOptions:{type:"designOptions",access:"public",value:{},options:{label:"Design Options"}},editFormTab1:{type:"group",access:"protected",value:["iconPicker","iconColor","iconUrl","size","shape","shapeColor","iconAlignment","toggleCustomHover","iconColorHover","shapeColorHover","metaCustomId","customClass"],options:{label:"General"}},metaEditFormTabs:{type:"group",access:"protected",value:["editFormTab1","designOptions"]},relatedTo:{type:"group",access:"protected",value:["General","Icon"]},assetsLibrary:{access:"public",type:"string",value:["iconpicker","animate"]},metaBackendLabels:{type:"group",access:"protected",value:[{value:["iconPicker","iconUrl","shape","shapeColor"],options:{onChange:[{rule:{attribute:"shape",value:"none"},dependency:"shapeColor",action:"toggle"}]}}]},metaCustomId:{type:"customId",access:"public",value:"",options:{label:"Element ID",description:"Apply unique Id to element to link directly to it by using #your_id (for element id use lowercase input only)."}},tag:{type:"string",access:"protected",value:"icon"}}},"./node_modules/raw-loader/index.js!./icon/cssMixins/iconColor.pcss":function(e,n){e.exports=".vce-features {\n  &.vce-icon--style {\n    &--icon-color-$selector {\n\n      .vce-icon-container {\n        @if $iconColor != false {\n          color: $iconColor;\n          transition: color .2s ease-in-out;\n        }\n      }\n    }\n  }\n}\n"},"./node_modules/raw-loader/index.js!./icon/cssMixins/iconColorHover.pcss":function(e,n){e.exports=".vce-icon--style {\n  &--icon-color-hover-$selector {\n\n    &.vce-features--style {\n      &-none {\n        .vce-icon-container {\n          &:hover {\n            color: $iconColorHover;\n          }\n        }\n      }\n\n      &-filled {\n        &-circle, &-rounded, &-square, &-diamond, &-hexagon {\n          .vce-features--icon {\n            &:hover {\n              .vce-icon-container {\n                color: $iconColorHover;\n              }\n            }\n          }\n        }\n      }\n\n      &-outlined {\n        &-circle, &-rounded, &-square, &-diamond, &-hexagon, &-underlined {\n          .vce-features--icon {\n            &:hover {\n              .vce-icon-container {\n                color: $iconColorHover;\n              }\n            }\n          }\n        }\n      }\n    }\n  }\n}"},"./node_modules/raw-loader/index.js!./icon/cssMixins/shapeColor.pcss":function(e,n){e.exports=".vce-icon--style {\n  &--shape-color-$selector {\n\n    &.vce-features--style {\n      &-filled {\n        &-circle, &-rounded, &-square, &-diamond {\n          .vce-features--icon {\n            @if $shapeColor != false {\n              background-color: $shapeColor;\n              transition: background-color .2s ease-in-out;\n            }\n          }\n          a:hover {\n            background-color: color($shapeColor shade(10%));\n          }\n        }\n        &-hexagon {\n          .vce-features--icon {\n            @if $shapeColor != false {\n              fill: $shapeColor;\n              background-color: transparent;\n              transition: fill .2s ease-in-out;\n            }\n          }\n          a:hover {\n            fill: color($shapeColor shade(10%));\n          }\n        }\n      }\n\n      &-outlined {\n        &-circle, &-rounded, &-square, &-diamond {\n          .vce-features--icon {\n            @if $shapeColor != false {\n              border-color: $shapeColor;\n              transition: border-color .2s ease-in-out;\n            }\n          }\n          a:hover {\n            border-color: color($shapeColor shade(10%));\n          }\n        }\n        &-hexagon {\n          .vce-features--icon {\n            @if $shapeColor != false {\n              stroke: $shapeColor;\n              fill: transparent;\n              background-color: transparent;\n              transition: stroke .2s ease-in-out;\n            }\n          }\n          a:hover {\n            stroke: color($shapeColor shade(10%));\n          }\n        }\n        &-underlined {\n          .vce-features--icon {\n            &::after {\n              @if $shapeColor != false {\n                background-color: $shapeColor;\n                transition: background-color .2s ease-in-out;\n              }\n            }\n          }\n          a:hover {\n            &::after {\n              background-color: color($shapeColor shade(10%));\n            }\n          }\n        }\n      }\n    }\n  }\n}"},"./node_modules/raw-loader/index.js!./icon/cssMixins/shapeColorHover.pcss":function(e,n){e.exports=".vce-icon--style {\n  &--shape-color-hover-$selector {\n\n    &.vce-features--style {\n      &-filled {\n        &-circle, &-rounded, &-square, &-diamond {\n          .vce-features--icon:hover {\n            background-color: $shapeColorHover;\n          }\n        }\n        &-hexagon {\n          .vce-features--icon:hover {\n            fill: $shapeColorHover;\n          }\n        }\n      }\n\n      &-outlined {\n        &-circle, &-rounded, &-square, &-diamond {\n          .vce-features--icon:hover {\n            border-color: $shapeColorHover;\n          }\n        }\n        &-hexagon {\n          .vce-features--icon:hover {\n            stroke: $shapeColorHover;\n          }\n        }\n        &-underlined {\n          .vce-features--icon:hover {\n            &::after {\n              background-color: $shapeColorHover;\n            }\n          }\n        }\n      }\n    }\n  }\n}"},"./node_modules/raw-loader/index.js!./icon/editor.css":function(e,n){e.exports=".vce-features {\n  min-height: 1em;\n}\n"},"./node_modules/raw-loader/index.js!./icon/styles.css":function(e,n){e.exports='/* ----------------------------------------------\n * Feature Icon\n * ---------------------------------------------- */\n.vce-features {\n  display: block;\n}\n.vce-features a {\n  outline: none;\n  border: none;\n  box-shadow: none;\n  text-decoration: none;\n}\n.vce-features-icon-wrapper {\n  display: inline-block;\n}\n.vce-features--icon {\n  position: relative;\n  width: 2.9em;\n  height: 2.9em;\n  display: inline-block;\n  vertical-align: top;\n}\n.vce-features--icon .vce-icon-container {\n  position: absolute;\n  left: 50%;\n  top: 50%;\n  transform: translate(-50%, -50%);\n  z-index: 2;\n}\n.vce-features--icon .vce-icon-container::before {\n  position: absolute;\n  left: 50%;\n  top: 50%;\n  transform: translate(-50%, -50%);\n}\n.vce-features--icon .vce-icon-container:hover {\n  text-decoration: none;\n}\n.vce-features--icon svg {\n  display: none;\n  width: 2.9em;\n  height: 2.9em;\n  position: absolute;\n  z-index: 1;\n  top: 50%;\n  left: 50%;\n  transform: translate(-50%, -50%);\n}\n.vce-features--style-none .vce-features--icon {\n  margin-bottom: -0.85em;\n}\n.vce-features--style-filled-circle,\n.vce-features--style-filled-rounded,\n.vce-features--style-filled-square,\n.vce-features--style-filled-hexagon,\n.vce-features--style-filled-diamond {\n  border: none;\n}\n.vce-features--style-filled-circle .vce-features--icon {\n  border-radius: 50%;\n}\n.vce-features--style-filled-rounded .vce-features--icon {\n  border-radius: 10px;\n}\n.vce-features--style-filled-hexagon .vce-features--icon {\n  width: 3.1em;\n  height: 3.1em;\n}\n.vce-features--style-filled-hexagon .vce-features--icon svg {\n  width: 3.1em;\n  height: 3.1em;\n  display: block;\n}\n.vce-features--style-filled-diamond .vce-features--icon {\n  width: 2.1em;\n  height: 2.1em;\n  transform-origin: center center;\n  transform: rotate(45deg);\n  margin: calc(2.1em / 4.85);\n}\n.vce-features--style-filled-diamond .vce-features--icon span {\n  transform: rotate(-45deg);\n  height: 0;\n  width: 0;\n}\n.vce-features--style-outlined-circle,\n.vce-features--style-outlined-rounded,\n.vce-features--style-outlined-square,\n.vce-features--style-outlined-diamond {\n  background-color: transparent;\n}\n.vce-features--style-outlined-circle .vce-features--icon,\n.vce-features--style-outlined-rounded .vce-features--icon,\n.vce-features--style-outlined-square .vce-features--icon,\n.vce-features--style-outlined-diamond .vce-features--icon {\n  border-width: 3px;\n  border-style: solid;\n}\n.vce-features--style-outlined-circle .vce-features--icon {\n  border-radius: 50%;\n}\n.vce-features--style-outlined-rounded .vce-features--icon {\n  border-radius: 10px;\n}\n.vce-features--style-outlined-hexagon .vce-features--icon {\n  width: 3.1em;\n  height: 3.1em;\n}\n.vce-features--style-outlined-hexagon .vce-features--icon svg {\n  width: 3.1em;\n  height: 3.1em;\n  display: block;\n}\n.vce-features--style-outlined-hexagon .vce-features--icon svg::after {\n  border: none;\n}\n.vce-features--style-outlined-underlined .vce-features--icon::after {\n  content: \'\';\n  position: absolute;\n  height: 5px;\n  width: 2.9em;\n  left: 0;\n  bottom: 0;\n}\n.vce-features--style-outlined-diamond .vce-features--icon {\n  width: 2.1em;\n  height: 2.1em;\n  transform-origin: center center;\n  transform: rotate(45deg);\n  margin: calc(0.43298969em);\n}\n.vce-features--style-outlined-diamond .vce-features--icon span {\n  transform: rotate(-45deg);\n  height: 0;\n  width: 0;\n}\n.vce-features--align-left {\n  text-align: left;\n}\n.vce-features--align-center {\n  text-align: center;\n}\n.vce-features--align-right {\n  text-align: right;\n}\n.vce-features--size-tiny {\n  font-size: 18px;\n}\n.vce-features--size-small {\n  font-size: 24px;\n}\n.vce-features--size-medium {\n  font-size: 32px;\n}\n.vce-features--size-large {\n  font-size: 48px;\n}\n/*RTL support. */\n/*LTR support. */\n.rtl.vce-features,\n[dir="rtl"].vce-features,\n.rtl .vce-features,\n[dir="rtl"] .vce-features {\n  direction: rtl;\n  unicode-bidi: embed;\n  /*check if IE+10 and than hack hexagon to the center*/\n}\n@media all and (-ms-high-contrast: none), (-ms-high-contrast: active) {\n  .rtl.vce-features .vce-features--icon svg,\n  [dir="rtl"].vce-features .vce-features--icon svg,\n  .rtl .vce-features .vce-features--icon svg,\n  [dir="rtl"] .vce-features .vce-features--icon svg {\n    right: 50%;\n  }\n}\n@supports (-ms-accelerator:true) {\n  .rtl.vce-features .vce-features--icon svg,\n  [dir="rtl"].vce-features .vce-features--icon svg,\n  .rtl .vce-features .vce-features--icon svg,\n  [dir="rtl"] .vce-features .vce-features--icon svg {\n    right: 50%;\n  }\n}\n.ltr.vce-features,\n[dir="ltr"].vce-features,\n.ltr .vce-features,\n[dir="ltr"] .vce-features {\n  direction: ltr;\n  unicode-bidi: normal;\n}\n.vce-features--icon .fa::before {\n  line-height: 0.9em;\n  height: 0.9em;\n}\n.vce-features--icon .typcn::before {\n  font-size: 1.3em;\n}\n.vce-features--icon .vcv-ui-icon-material::before {\n  font-size: 1.2em;\n  line-height: 0.95em;\n}\n.vce-features--icon .vcv-ui-icon-openiconic::before {\n  height: 0.9em;\n}\n.vce-features--icon .vcv-ui-icon-monosocial::before {\n  font-size: 2em;\n}\n'}},[["./icon/index.js"]]]);