import $ from "jquery";
import DarkMode from "../Resources/ts/DarkMode.util";

const CommonFunctions = {
    LoaderHandler: () => {
        setTimeout(() => {
            $("#loader_container").fadeToggle();
        }, 1000);
    },
    DarkModeHandler: () => DarkMode.ToogleTheme()
}


window.addEventListener("load", () => {
    Object.values(CommonFunctions).map((value) => {value()})
});