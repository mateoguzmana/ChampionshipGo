let GlobalData;
export default GlobalData = {
    currentLanguage: localStorage.getItem("language") && localStorage.getItem("language") !== undefined ? localStorage.getItem("language") : "en",
    languages: {
        en: {
            title: "${name}",
            icon: "../../assets/en_flag.png"
        },
        sp: {
            title: "${name}",
            icon: "../../assets/sp_flag.jpg"
        },
        pt: {
            title: "${name}",
            icon: "../../assets/pt_flag.jpg"
        },
        fr: {
            title: "${name}",
            icon: "../../assets/fr_flag.gif"
        }
    }
}