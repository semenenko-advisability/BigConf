(()=>{"use strict";console.log("components");const e={windowEl:window,documentEl:document,htmlEl:document.documentElement,bodyEl:document.body},t=()=>{const t=document?.querySelectorAll(".fixed-block"),o=(document.body,parseInt(e.bodyEl.dataset.position,10));t.forEach((e=>{e.style.paddingRight="0px"})),e.bodyEl.style.paddingRight="0px",e.bodyEl.style.top="auto",e.bodyEl.classList.remove("dis-scroll"),e.htmlEl.style.scrollBehavior="auto",window.scroll({top:o,left:0}),e.bodyEl.removeAttribute("data-position")};!function(){const o=document?.querySelector("[data-burger]"),l=document?.querySelector("[data-menu]"),a=document?.querySelectorAll("[data-menu-item]"),s=document?.querySelector("[data-menu-overlay]");o?.addEventListener("click",(a=>{o?.classList.toggle("burger--active"),l?.classList.toggle("menu--active"),l?.classList.contains("menu--active")?(o?.setAttribute("aria-expanded","true"),o?.setAttribute("aria-label","Закрыть меню"),(()=>{const t=document?.querySelectorAll(".fixed-block"),o=window.scrollY,l=window.innerWidth-e.bodyEl.offsetWidth+"px";e.htmlEl.style.scrollBehavior="none",t.forEach((e=>{e.style.paddingRight=l})),e.bodyEl.style.paddingRight=l,e.bodyEl.classList.add("dis-scroll"),e.bodyEl.dataset.position=o,e.bodyEl.style.top=`-${o}px`})()):(o?.setAttribute("aria-expanded","false"),o?.setAttribute("aria-label","Открыть меню"),t())})),s?.addEventListener("click",(()=>{o?.setAttribute("aria-expanded","false"),o?.setAttribute("aria-label","Открыть меню"),o.classList.remove("burger--active"),l.classList.remove("menu--active"),t()})),a?.forEach((e=>{e.addEventListener("click",(()=>{o?.setAttribute("aria-expanded","false"),o?.setAttribute("aria-label","Открыть меню"),o.classList.remove("burger--active"),l.classList.remove("menu--active"),t()}))}))}(),(()=>{const e=document?.querySelector(".header").offsetHeight;document.querySelector(":root").style.setProperty("--header-height",`${e}px`)})()})();