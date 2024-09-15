import{e as y,g as f}from"./links.w575jfOL.js";import{G as S}from"./Graph.WtVg2p4K.js";import{_ as l}from"./_plugin-vue_export-helper.BN1snXvA.js";import{v as i,o as c,c as h,C as p,k as _,l as u,a as $,x as w,t as k,b as m}from"./runtime-dom.esm-bundler.CWn9hmRK.js";import{C as x}from"./Blur.DIwtbD0z.js";import{C as b}from"./Index.BLcpDwVY.js";import{L as C}from"./LicenseConditions.D0P8U_He.js";const v={setup(){return{searchStatisticsStore:y()}},components:{Graph:S},props:{legendStyle:String},computed:{series(){var n,s,o,a;if(!((s=(n=this.searchStatisticsStore.data)==null?void 0:n.keywords)!=null&&s.distribution)||!((a=(o=this.searchStatisticsStore.data)==null?void 0:o.keywords)!=null&&a.distributionIntervals))return[];const e=this.searchStatisticsStore.data.keywords.distribution,r=this.searchStatisticsStore.data.keywords.distributionIntervals;return[{name:this.$t.__("Top 3 Position",this.$td),data:r.map(t=>({x:t.date,y:t.top3})),legend:{total:e.top3||"0"}},{name:this.$t.__("4-10 Position",this.$td),data:r.map(t=>({x:t.date,y:t.top10})),legend:{total:e.top10||"0"}},{name:this.$t.__("11-50 Position",this.$td),data:r.map(t=>({x:t.date,y:t.top50})),legend:{total:e.top50||"0"}},{name:this.$t.__("50-100 Position",this.$td),data:r.map(t=>({x:t.date,y:t.top100})),legend:{total:e.top100||"0"}}]}}},P={class:"aioseo-search-statistics-keywords-graph"};function L(e,r,n,s,o,a){const t=i("graph");return c(),h("div",P,[p(t,{series:a.series,loading:s.searchStatisticsStore.loading.keywords,"legend-style":n.legendStyle},null,8,["series","loading","legend-style"])])}const g=l(v,[["render",L]]),T={components:{CoreBlur:x,KeywordsGraph:g}};function B(e,r,n,s,o,a){const t=i("keywords-graph"),d=i("core-blur");return c(),_(d,null,{default:u(()=>[p(t,{"legend-style":"simple"})]),_:1})}const G=l(T,[["render",B]]),K={components:{Blur:G,Cta:b},data(){return{strings:{ctaHeader:this.$t.sprintf(this.$t.__("%1$sUpgrade your %2$s %3$s%4$s plan to see Keyword Positions",this.$td),`<a href="${this.$links.getPricingUrl("search-statistics","search-statistics-upsell")}" target="_blank">`,"AIOSEO","Pro","</a>"),ctaDescription:this.$t.__("Track how well keywords are ranking in search results over time based on their position and average CTR. This can help you understand the performance of keywords and identify any trends or fluctuations.",this.$td)}}}},U={class:"aioseo-search-statistics-keyword-rankings"},A=["innerHTML"];function H(e,r,n,s,o,a){const t=i("blur"),d=i("cta");return c(),h("div",U,[p(t),p(d,{type:4},{"header-text":u(()=>[$("span",{innerHTML:o.strings.ctaHeader},null,8,A)]),description:u(()=>[w(k(o.strings.ctaDescription),1)]),_:1})])}const N=l(K,[["render",H]]),R={setup(){return{licenseStore:f(),searchStatisticsStore:y()}},mixins:[C],props:{redirects:Object},components:{KeywordsGraph:g,Upgrade:N}};function V(e,r,n,s,o,a){const t=i("keywords-graph",!0),d=i("upgrade");return c(),h("div",null,[e.shouldShowMain("search-statistics","keyword-rankings")||s.licenseStore.isUnlicensed||s.searchStatisticsStore.shouldShowSampleReports?(c(),_(t,{key:0,"legend-style":"simple"})):m("",!0),e.shouldShowUpgrade("search-statistics","keyword-rankings")&&!s.searchStatisticsStore.shouldShowSampleReports?(c(),_(d,{key:1})):m("",!0)])}const z=l(R,[["render",V]]);export{z as K};
