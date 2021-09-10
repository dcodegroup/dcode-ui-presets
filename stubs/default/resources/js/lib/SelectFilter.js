
export default class {
    constructor(el){
        this.selectFilterContainer = el;
        this.selectFilterBtn = this.selectFilterContainer.querySelector("div > button");
        this.selectFilterText = this.selectFilterContainer.querySelector("div > span");
        this.selectFilterMenu = this.selectFilterContainer.querySelector("ul");
        this.selectFilterMenuButtons = Array.from(this.selectFilterMenu.querySelectorAll('li > button'));
        this.menuOpen = false;
        this.selectFilterText.textContent = this.selectFilterMenuButtons[0].textContent; //add first menu item as the default filter selection
        this.selectFilterBtn.addEventListener('click', ()=>{
            this.handleSelectFilterBtnClick();
        });
        this.selectFilterMenuButtons.forEach(menuButton => {
            menuButton.addEventListener('click', ()=>{
                this.handleMenuButtonClick(menuButton);
            });
        });
    }
    handleSelectFilterBtnClick(){
        if(this.menuOpen){
            this.closeMenu();
        } else {
            this.selectFilterBtn.classList.add("open");
            this.selectFilterMenu.classList.add("open"); 
            this.menuOpen = true;

            window.pal.clickoff([this.selectFilterContainer], () => {
                this.closeMenu();
            });
        }
    }
    handleMenuButtonClick(menuButton){
        this.selectFilterText.textContent = menuButton.textContent;
        this.closeMenu();
    }
    closeMenu(){
        this.selectFilterBtn.classList.remove("open");
        this.selectFilterMenu.classList.remove("open");
        this.menuOpen = false;
        window.pal.resetClickoff();

    }
}