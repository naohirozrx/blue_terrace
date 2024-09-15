import{v as w,o as a,c as l,a as r,F as N,J as F,k as G,G as O,q as W,x as I,t as m,C as P,b as S,Y as ae}from"./js/runtime-dom.esm-bundler.CWn9hmRK.js";import{l as ce}from"./js/index.B287AVaz.js";import{l as le}from"./js/index.vo0_cz49.js";import{l as de}from"./js/index.3BJ3ZnWB.js";import{a as ue,b as pe,f as he,d as Z,H as me,l as K,u as _e}from"./js/links.w575jfOL.js";import{a as ge}from"./js/allowed.jlDmxPN2.js";import{t as fe}from"./js/postSlug.DR-r-K_I.js";import{a as ve}from"./js/Image.CErBif13.js";import{T as Se}from"./js/Tags.BU74BX7Y.js";import{C as be}from"./js/GoogleSearchPreview.BT7aiH-w.js";import{c as Pe,e as we,f as ye}from"./js/Caret.B8YmKvEY.js";import{S as xe}from"./js/Exclamation.SlOpu0r6.js";import{S as Ee}from"./js/External.BpvgQygW.js";import{_ as b}from"./js/_plugin-vue_export-helper.BN1snXvA.js";import{S as $e}from"./js/Twitter.CqUopDZ2.js";import{s as ke}from"./js/metabox.C_lvn8R-.js";import{l as Ae}from"./js/loadTruSeo.C4pQ3o4-.js";import{e as Ce}from"./js/elemLoaded.COgXIo-H.js";import{t as j}from"./js/toString.zLSwYOtv.js";import{u as Te}from"./js/upperFirst.yVnsg4QL.js";import{d as Re}from"./js/cleanForSlug.BVGRQ_59.js";import"./js/default-i18n.DXRQgkn2.js";import"./js/constants.Ct0G2N2t.js";import"./js/helpers.CXsRrhc8.js";import"./js/_baseSet.rYV3oc6X.js";import"./js/_stringToArray.DnK4tKcY.js";import"./js/_baseTrim.BYZhh0MR.js";function Oe(e){return Te(j(e).toLowerCase())}function Ie(e,t,s,o){for(var i=-1,d=e==null?0:e.length;++i<d;)s=t(s,e[i],i,e);return s}var Me=/[^\x00-\x2f\x3a-\x40\x5b-\x60\x7b-\x7f]+/g;function Le(e){return e.match(Me)||[]}var De=/[a-z][A-Z]|[A-Z]{2}[a-z]|[0-9][a-zA-Z]|[a-zA-Z][0-9]|[^a-zA-Z0-9 ]/;function Ue(e){return De.test(e)}var H="\\ud800-\\udfff",Ve="\\u0300-\\u036f",ze="\\ufe20-\\ufe2f",Be="\\u20d0-\\u20ff",Ne=Ve+ze+Be,q="\\u2700-\\u27bf",J="a-z\\xdf-\\xf6\\xf8-\\xff",Fe="\\xac\\xb1\\xd7\\xf7",Ge="\\x00-\\x2f\\x3a-\\x40\\x5b-\\x60\\x7b-\\xbf",We="\\u2000-\\u206f",Ze=" \\t\\x0b\\f\\xa0\\ufeff\\n\\r\\u2028\\u2029\\u1680\\u180e\\u2000\\u2001\\u2002\\u2003\\u2004\\u2005\\u2006\\u2007\\u2008\\u2009\\u200a\\u202f\\u205f\\u3000",Y="A-Z\\xc0-\\xd6\\xd8-\\xde",Ke="\\ufe0e\\ufe0f",Q=Fe+Ge+We+Ze,X="['’]",M="["+Q+"]",je="["+Ne+"]",ee="\\d+",He="["+q+"]",te="["+J+"]",se="[^"+H+Q+ee+q+J+Y+"]",qe="\\ud83c[\\udffb-\\udfff]",Je="(?:"+je+"|"+qe+")",Ye="[^"+H+"]",oe="(?:\\ud83c[\\udde6-\\uddff]){2}",ie="[\\ud800-\\udbff][\\udc00-\\udfff]",g="["+Y+"]",Qe="\\u200d",L="(?:"+te+"|"+se+")",Xe="(?:"+g+"|"+se+")",D="(?:"+X+"(?:d|ll|m|re|s|t|ve))?",U="(?:"+X+"(?:D|LL|M|RE|S|T|VE))?",re=Je+"?",ne="["+Ke+"]?",et="(?:"+Qe+"(?:"+[Ye,oe,ie].join("|")+")"+ne+re+")*",tt="\\d*(?:1st|2nd|3rd|(?![123])\\dth)(?=\\b|[A-Z_])",st="\\d*(?:1ST|2ND|3RD|(?![123])\\dTH)(?=\\b|[a-z_])",ot=ne+re+et,it="(?:"+[He,oe,ie].join("|")+")"+ot,rt=RegExp([g+"?"+te+"+"+D+"(?="+[M,g,"$"].join("|")+")",Xe+"+"+U+"(?="+[M,g+L,"$"].join("|")+")",g+"?"+L+"+"+D,g+"+"+U,st,tt,ee,it].join("|"),"g");function nt(e){return e.match(rt)||[]}function at(e,t,s){return e=j(e),t=t,t===void 0?Ue(e)?nt(e):Le(e):e.match(t)||[]}var ct="['’]",lt=RegExp(ct,"g");function dt(e){return function(t){return Ie(at(Re(t).replace(lt,"")),e,"")}}var V=dt(function(e,t,s){return t=t.toLowerCase(),e+(s?Oe(t):t)});const ut={setup(){return{optionsStore:ue(),postEditorStore:pe(),settingsStore:he(),tagsStore:Z()}},mixins:[Se,ve],components:{CoreGoogleSearchPreview:be,SvgCircleCheck:Pe,SvgCircleClose:we,SvgCircleExclamation:xe,SvgExternal:Ee,SvgPencil:ye},data(){return{allowed:ge,separator:void 0,socialImage:null,socialImageKey:0,strings:{serpPreview:this.$t.__("SERP Preview",this.$td),canonicalUrl:this.$t.__("Canonical URL",this.$td)}}},computed:{tips(){let e=[{label:this.$t.__("Visibility",this.$td),name:"visibility",access:"aioseo_page_advanced_settings"},{label:this.$t.__("SEO Analysis",this.$td),name:"seoAnalysis",access:"aioseo_page_analysis"},{label:this.$t.__("Readability",this.$td),name:"readabilityAnalysis",access:"aioseo_page_analysis"},{label:this.$t.__("Focus Keyphrase",this.$td),name:"focusKeyphrase",access:"aioseo_page_analysis"},{label:this.$t.__("Social",this.$td),name:"social",access:"aioseo_page_social_settings"}].filter(t=>this.allowed(t.access)&&(t.access!=="aioseo_page_analysis"||fe()));return!this.optionsStore.options.social.facebook.general.enable&&!this.optionsStore.options.social.twitter.general.enable&&(e=e.filter(t=>t.name!=="social")),e.forEach((t,s)=>{e[s]={...t,...this.getData(t.name)}}),e},canImprove(){return this.tips.some(e=>e.type==="error")}},methods:{getIcon(e){switch(e){case"error":return"svg-circle-close";case"warning":return"svg-circle-exclamation";case"success":default:return"svg-circle-check"}},getData(e){const t={};if(e==="visibility"&&(t.value=this.$t.__("Good!",this.$td),t.type="success",(this.postEditorStore.currentPost.default?this.optionsStore.dynamicOptions.searchAppearance.postTypes[this.postEditorStore.currentPost.postType]&&!this.optionsStore.dynamicOptions.searchAppearance.postTypes[this.postEditorStore.currentPost.postType].advanced.robotsMeta.default&&this.optionsStore.dynamicOptions.searchAppearance.postTypes[this.postEditorStore.currentPost.postType].advanced.robotsMeta.noindex:this.postEditorStore.currentPost.noindex)&&(t.value=this.$t.__("Blocked!",this.$td),t.type="error")),e==="seoAnalysis"){t.value=this.$t.__("N/A",this.$td),t.type="error";const s=this.postEditorStore.currentPost.seo_score;Number.isInteger(s)&&(t.value=s+"/100",t.type=80<s?"success":50<s?"warning":"error")}if(e==="readabilityAnalysis"){t.value=this.$t.__("Good!",this.$td),t.type="success";const s=this.postEditorStore.currentPost.page_analysis.analysis.readability.errors;s&&0<s&&(t.value=this.$t.sprintf(this.$t._n("%1$s error found!","%1$s errors found!",s,this.$td),s),t.type="error")}if(e==="focusKeyphrase"){t.value=this.$t.__("No focus keyphrase!",this.$td),t.type="error";const s=this.postEditorStore.currentPost.keyphrases.focus;s&&s.keyphrase&&(t.value=s.score+"/100",t.type=80<s.score?"success":50<s.score?"warning":"error")}if(e==="social"){t.value=this.$t.__("Good!",this.$td),t.type="success",this.socialImageKey;const s=this.parseTags(this.postEditorStore.currentPost.og_title||this.postEditorStore.currentPost.title||this.postEditorStore.currentPost.tags.title).trim(),o=this.parseTags(this.postEditorStore.currentPost.og_description||this.postEditorStore.currentPost.description||this.postEditorStore.currentPost.tags.description).trim(),i=this.socialImage;(!s||!o||!i)&&(t.value=this.$t.__("Missing social markup!",this.$td),t.type="error")}return{...t,icon:this.getIcon(t.type)}},openSidebar(e){var i,d,c,u,p,n,h,_,f,v;const t=(i=window.wp)!=null&&i.editor?(c=(d=window.wp)==null?void 0:d.editor)==null?void 0:c.openGeneralSidebar:(p=(u=window.wp)==null?void 0:u.editPost)==null?void 0:p.openGeneralSidebar;((n=window.wp)!=null&&n.editor?(_=(h=window.wp)==null?void 0:h.editor)==null?void 0:_.closePublishSidebar:(v=(f=window.wp)==null?void 0:f.editPost)==null?void 0:v.closePublishSidebar)(),t("aioseo-post-settings-sidebar/aioseo-post-settings-sidebar");const o={};switch(e){case"canonical":case"visibility":o.tab="advanced";break;case"seoAnalysis":o.tab="general",o.card="basicseo";break;case"readabilityAnalysis":o.tab="general",o.card="readability";break;case"focusKeyphrase":o.tab="general",o.card="focus";break;case"social":o.tab="social";break}this.settingsStore.changeTabSettings({setting:"mainSidebar",value:o})}},async mounted(){await this.setImageUrl().then(()=>{this.socialImage=this.imageUrl}),window.aioseoBus.$on("updateSocialImagePreview",e=>{this.socialImage=e.image,this.socialImageKey++}),this.$nextTick(()=>{const e=document.querySelector(".aioseo-pre-publish .editor-post-publish-panel__link");e&&(e.innerHTML=this.canImprove?this.$t.__("Your post needs improvement!",this.$td):this.$t.__("You're good to go!",this.$td))})}},pt={key:0,class:"seo-overview"},ht={class:"pre-publish-checklist"},mt={class:"icon"},_t=["onClick"],gt={key:0,class:"snippet-preview"},ft={class:"title"},vt={key:1,class:"canonical-url"},St={class:"title"},bt=["href"];function Pt(e,t,s,o,i,d){const c=w("svg-pencil"),u=w("core-google-search-preview"),p=w("svg-external");return o.postEditorStore.currentPost.id?(a(),l("div",pt,[r("ul",ht,[(a(!0),l(N,null,F(d.tips,(n,h)=>(a(),l("li",{key:h},[r("span",mt,[(a(),G(W(n.icon),{class:O(n.type)},null,8,["class"]))]),r("span",null,[I(m(n.label)+": ",1),r("span",{class:O(["result",n.value.endsWith("/100")?n.type:null])},m(n.value),3)]),o.optionsStore.dynamicOptions.searchAppearance.postTypes[o.postEditorStore.currentPost.postType]&&o.optionsStore.dynamicOptions.searchAppearance.postTypes[o.postEditorStore.currentPost.postType].advanced.showMetaBox?(a(),l("span",{key:0,class:"edit",onClick:_=>d.openSidebar(n.name)},[P(c)],8,_t)):S("",!0)]))),128))]),i.allowed("aioseo_page_analysis")?(a(),l("div",gt,[r("p",ft,m(i.strings.serpPreview)+":",1),P(u,{url:o.tagsStore.liveTags.permalink,title:e.parseTags(o.postEditorStore.currentPost.title||o.postEditorStore.currentPost.tags.title||"#post_title #separator_sa #site_title"),description:e.parseTags(o.postEditorStore.currentPost.description||o.postEditorStore.currentPost.tags.description||"#post_content")},null,8,["url","title","description"])])):S("",!0),i.allowed("aioseo_page_analysis")&&o.postEditorStore.currentPost.canonicalUrl?(a(),l("div",vt,[r("p",St,[I(m(i.strings.canonicalUrl)+": ",1),r("span",{class:"edit",onClick:t[0]||(t[0]=n=>d.openSidebar("canonical"))},[P(c)])]),r("a",{href:o.postEditorStore.currentPost.canonicalUrl,target:"_blank",rel:"noopener noreferrer"},[r("span",null,m(o.postEditorStore.currentPost.canonicalUrl),1),P(p)],8,bt)])):S("",!0)])):S("",!0)}const z=b(ut,[["render",Pt]]),wt={},yt={width:"32",height:"32",fill:"none",class:"aioseo-facebook-rounded",xmlns:"http://www.w3.org/2000/svg"},xt=r("circle",{cx:"16",cy:"16",r:"16",fill:"currentColor"},null,-1),Et=r("path",{d:"M24 16c0-4.4-3.6-8-8-8s-8 3.6-8 8c0 4 2.9 7.3 6.7 7.9v-5.6h-2V16h2v-1.8c0-2 1.2-3.1 3-3.1.9 0 1.8.2 1.8.2v2h-1c-1 0-1.3.6-1.3 1.2V16h2.2l-.4 2.3h-1.9V24c4-.6 6.9-4 6.9-8z",fill:"#fff"},null,-1),$t=[xt,Et];function kt(e,t){return a(),l("svg",yt,$t)}const At=b(wt,[["render",kt]]),Ct={},Tt={width:"32",height:"32",fill:"none",class:"aioseo-linkedin-rounded",xmlns:"http://www.w3.org/2000/svg"},Rt=r("circle",{cx:"16",cy:"16",r:"16",fill:"currentColor"},null,-1),Ot=r("path",{d:"M11.6 24H8.2V13.3h3.4V24zM9.9 11.8C8.8 11.8 8 11 8 9.9 8 8.8 8.9 8 9.9 8c1.1 0 1.9.8 1.9 1.9 0 1.1-.8 1.9-1.9 1.9zM24 24h-3.4v-5.8c0-1.7-.7-2.2-1.7-2.2s-2 .8-2 2.3V24h-3.4V13.3h3.2v1.5c.3-.7 1.5-1.8 3.2-1.8 1.9 0 3.9 1.1 3.9 4.4V24h.2z",fill:"#fff"},null,-1),It=[Rt,Ot];function Mt(e,t){return a(),l("svg",Tt,It)}const Lt=b(Ct,[["render",Mt]]),Dt={},Ut={width:"32",height:"32",fill:"none",class:"aioseo-pinterest-rounded",xmlns:"http://www.w3.org/2000/svg"},Vt=r("circle",{cx:"16",cy:"16",r:"16",fill:"currentColor"},null,-1),zt=r("path",{d:"M16.056 6.583c-5.312 0-9.658 4.346-9.658 9.658a9.581 9.581 0 005.795 8.813c0-.724 0-1.448.12-2.173.242-.845 1.207-5.312 1.207-5.312s-.362-.604-.362-1.57c0-1.448.846-2.535 1.811-2.535.845 0 1.328.604 1.328 1.45 0 .844-.603 2.172-.845 3.38-.241.965.483 1.81 1.57 1.81 1.81 0 3.018-2.293 3.018-5.19 0-2.174-1.449-3.743-3.984-3.743-2.898 0-4.709 2.173-4.709 4.587 0 .845.242 1.449.604 1.932.12.241.242.241.12.483 0 .12-.12.603-.24.724-.121.242-.242.362-.483.242-1.329-.604-1.932-2.053-1.932-3.743 0-2.777 2.294-6.036 6.881-6.036 3.743 0 6.157 2.656 6.157 5.553 0 3.743-2.052 6.64-5.19 6.64-1.087 0-2.053-.603-2.415-1.207 0 0-.604 2.173-.725 2.656a10.702 10.702 0 01-.966 2.052c.846.242 1.811.363 2.777.363 5.312 0 9.658-4.347 9.658-9.659.121-4.829-4.225-9.175-9.537-9.175z",fill:"#fff"},null,-1),Bt=[Vt,zt];function Nt(e,t){return a(),l("svg",Ut,Bt)}const Ft=b(Dt,[["render",Nt]]),Gt={setup(){return{tagsStore:Z()}},components:{SvgFacebookRounded:At,SvgLinkedinRounded:Lt,SvgPinterestRounded:Ft,SvgIconTwitter:$e},data(){return{strings:{title:this.$t.__("Get out the word!",this.$td),description:this.$t.__("Share your content on your favorite social media platforms to drive engagement and increase your SEO.",this.$td)}}},computed:{socialNetworks(){return[{icon:"svg-icon-twitter",link:"https://x.com/share?url="},{icon:"svg-facebook-rounded",link:"https://www.facebook.com/sharer/sharer.php?u="},{icon:"svg-pinterest-rounded",link:"https://pinterest.com/pin/create/button/?url="},{icon:"svg-linkedin-rounded",link:"https://www.linkedin.com/shareArticle?url="}].map(e=>({...e,link:e.link+this.tagsStore.liveTags.permalink}))}}},Wt={key:0,class:"aioseo-post-publish"},Zt={class:"title"},Kt={class:"description"},jt={class:"links"},Ht=["href"];function qt(e,t,s,o,i,d){return o.tagsStore.liveTags.permalink?(a(),l("div",Wt,[r("h2",Zt,m(i.strings.title),1),r("p",Kt,m(i.strings.description),1),r("div",jt,[(a(!0),l(N,null,F(d.socialNetworks,(c,u)=>(a(),l("a",{class:"link",target:"_blank",key:u,href:c.link},[(a(),G(W(c.icon)))],8,Ht))),128))])])):S("",!0)}const Jt=b(Gt,[["render",qt]]);(function(e){var u,p,n,h,_,f,v,y,x,E,$,k,A,C,T,R;if(!me()||!ke()||!((p=(u=window.wp)==null?void 0:u.editor)!=null&&p.PluginDocumentSettingPanel)&&!((h=(n=window.wp)==null?void 0:n.editPost)!=null&&h.PluginDocumentSettingPanel))return;const t=((f=(_=window==null?void 0:window.wp)==null?void 0:_.editor)==null?void 0:f.PluginDocumentSettingPanel)||((y=(v=window.wp)==null?void 0:v.editPost)==null?void 0:y.PluginDocumentSettingPanel),s=((E=(x=window==null?void 0:window.wp)==null?void 0:x.editor)==null?void 0:E.PluginPrePublishPanel)||((k=($=window.wp)==null?void 0:$.editPost)==null?void 0:k.PluginPrePublishPanel),o=((C=(A=window==null?void 0:window.wp)==null?void 0:A.editor)==null?void 0:C.PluginPostPublishPanel)||((R=(T=window.wp)==null?void 0:T.editPost)==null?void 0:R.PluginPostPublishPanel),i=e.plugins.registerPlugin;K();const c=_e().aioseo.user;!c.capabilities.aioseo_page_analysis&&!c.capabilities.aioseo_page_general_settings&&!c.capabilities.aioseo_page_advanced_settings||i("aioseo-publish-panel",{render:()=>e.element.createElement(e.element.Fragment,{},e.element.createElement(t,{title:"AIOSEO",className:"aioseo-document-setting aioseo-seo-overview",icon:e.element.Fragment},e.element.createElement("div",{},e.element.createElement("div",{id:"aioseo-document-setting"}))),e.element.createElement(s,{title:["AIOSEO",":",e.element.createElement("span",{key:"scoreDescription",className:"editor-post-publish-panel__link"})],className:"aioseo-pre-publish aioseo-seo-overview",initialOpen:!0,icon:e.element.Fragment},e.element.createElement("div",{},e.element.createElement("div",{id:"aioseo-pre-publish"}))),e.element.createElement(o,{title:"AIOSEO",initialOpen:!0,icon:e.element.Fragment},e.element.createElement("div",{},e.element.createElement("div",{id:"aioseo-post-publish"}))))})})(window.wp);const B=e=>{let t=ae({...e.component,name:"Standalone/PublishPanel"});return t=ce(t),t=le(t),t=de(t),K(t),t.mount("#"+e.id),window.addEventListener("load",()=>{Ae(t,!1)}),t};window.aioseo.currentPost&&window.aioseo.currentPost.context==="post"&&[{id:"aioseo-pre-publish",component:z},{id:"aioseo-document-setting",component:z},{id:"aioseo-post-publish",component:Jt}].forEach(t=>{document.getElementById(t.id)?B(t):(Ce("#"+t.id,V(t.id)),document.addEventListener("animationstart",function(s){V(t.id)===s.animationName&&B(t)},{passive:!0}))});