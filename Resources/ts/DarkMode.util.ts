/** Adaptação do projeto "Dark Mode Switch" by Coliff. 
 * Link do Projeto: https://github.com/coliff/dark-mode-switch
*/

class DarkMode {
    private darkSwitch:HTMLInputElement;
    
    constructor() {
        this.darkSwitch = document.querySelector("#darkSwitch");
    }
    
    ToogleTheme() {
        if(this.darkSwitch != null) {
            this.initTheme();
            this.navbarDark();
    
            this.darkSwitch?.addEventListener("change", () => {
                this.navbarDark()
                this.resetTheme();
            });
        }
    }

    initTheme() : void {
        var darkThemeSelected =
        localStorage.getItem("darkSwitch") !== null &&
        localStorage.getItem("darkSwitch") === "dark";
        this.darkSwitch.checked = darkThemeSelected;
        darkThemeSelected
        ?
        document.body.setAttribute("data-theme", "dark") :
        document.body.removeAttribute("data-theme");
    }

    resetTheme() {
        if (this.darkSwitch?.checked) {
            document.body.setAttribute("data-theme", "dark");
            localStorage.setItem("darkSwitch", "dark");
        } else {
            document.body.removeAttribute("data-theme");
            localStorage.removeItem("darkSwitch");
        }
    }

    /**DarkMode for Main Navbar */
    navbarDark() {
        let navbar = document.querySelector(".navbar");
        if (this.darkSwitch.checked) {
            navbar?.classList.add("navbar-dark");
            navbar?.classList.remove("navbar-light");
        } else {
            navbar?.classList.remove("navbar-dark");
            navbar?.classList.add("navbar-light");
        }
    }
}

export default new DarkMode();
