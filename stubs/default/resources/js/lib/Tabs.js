export default class {
    constructor(el){
        this.tabs = el;
        this.tabListItems = Array.from(this.tabs.querySelectorAll("ul > li"));
        this.tabMenus = Array.from(this.tabs.querySelectorAll("ul > li > button"));
        this.panels = Array.from(this.tabs.querySelectorAll("section > div"));
        this.tabMenus.forEach(menu=>{
            menu.addEventListener('click', ()=>{
                this.handleMenuClick(menu);
            });
        });
    }
    handleMenuClick(menu){
        let panelTarget = menu.dataset.target;
        this.tabListItems.forEach(tabItem=>{
            tabItem.classList.remove('active');
        });
        this.panels.forEach(panel=>{
            panel.classList.remove('active');
        });
        menu.parentElement.classList.add('active');
        this.tabs.querySelector(`section > div[data-panel="${panelTarget}"]`).classList.add('active');
     }
}