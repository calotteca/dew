class SiteHeader extends HTMLElement{constructor(){super()}connectedCallback(){this.shim=document.querySelector("[data-header-shim]"),this.setShimHeight(),window.addEventListener("resize",(e=>{this.setShimHeight()}))}setShimHeight(){if(this.shim){const e=this.offsetHeight+"px";this.shim.style.height=e,document.body.style.setProperty("--header-shim",e)}}}customElements.define("site-header",SiteHeader);