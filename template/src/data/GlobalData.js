let GlobalData;
export default GlobalData = {
    currentLanguage: localStorage.getItem("language") && localStorage.getItem("language") !== undefined ? localStorage.getItem("language") : "en",
    languages: {
        en: {
            title: "${name}",
            icon: "http://flaglane.com/download/american-flag/american-flag-large.png"
        },
        sp: {
            title: "${name}",
            icon: "http://static.donquijote.org/images/culture/spanish_flag2.jpg"
        },
        pt: {
            title: "${name}",
            icon: "http://www.sciencekids.co.nz/images/pictures/flags680/Brazil.jpg"
        },
        fr: {
            title: "${name}",
            icon: "http://www.worldatlas.com/webimage/flags/countrys/zzzflags/frlarge.gif"
        }
    }
}