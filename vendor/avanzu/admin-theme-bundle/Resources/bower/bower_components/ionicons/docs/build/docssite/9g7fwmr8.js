/*! Built with http://stenciljs.com */
const{h:t}=window.DocsSite;import{a as s,u as a,c as i}from"./chunk-823bd299.js";class r{constructor(){this.unsubscribe=(()=>{}),this.activeClass="link-active",this.exact=!1,this.strict=!0,this.custom="a",this.match=null}componentWillLoad(){this.computeMatch()}computeMatch(){this.location&&(this.match=s(this.location.pathname,{path:this.urlMatch||this.url,exact:this.exact,strict:this.strict}))}handleClick(t){if(!a(t))return t.preventDefault(),this.history.push(this.getUrl(this.url))}getUrl(t){return"/"==t.charAt(0)&&"/"==this.root.charAt(this.root.length-1)?this.root.slice(0,this.root.length-1)+t:this.root+t}render(){let s={class:{[this.activeClass]:null!==this.match},onClick:this.handleClick.bind(this)};return this.anchorClass&&(s.class[this.anchorClass]=!0),"a"===this.custom&&(s=Object.assign({},s,{href:this.url,title:this.anchorTitle,role:this.anchorRole,tabindex:this.anchorTabIndex})),t(this.custom,Object.assign({},s),t("slot",null))}static get is(){return"stencil-route-link"}static get properties(){return{activeClass:{type:String,attr:"active-class"},anchorClass:{type:String,attr:"anchor-class"},anchorRole:{type:String,attr:"anchor-role"},anchorTabIndex:{type:String,attr:"anchor-tab-index"},anchorTitle:{type:String,attr:"anchor-title"},custom:{type:String,attr:"custom"},el:{elementRef:!0},exact:{type:Boolean,attr:"exact"},history:{type:"Any",attr:"history"},location:{type:"Any",attr:"location",watchCallbacks:["computeMatch"]},match:{state:!0},root:{type:String,attr:"root"},strict:{type:Boolean,attr:"strict"},url:{type:String,attr:"url"},urlMatch:{type:String,attr:"url-match"}}}}i.injectProps(r,["history","location","root"]);export{r as StencilRouteLink};