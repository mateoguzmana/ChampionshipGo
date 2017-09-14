import React, { Component } from 'react';
import Translations from '../data/Translations';
import GlobalData from '../data/GlobalData';

export default class SwitchLanguage extends Component {

    constructor() {
        super();
        this.state = {
            languageAuto: null,
            listLanguages: null
        }
        this.changeLanguage.bind(this);
    }

    componentDidMount() {
    }

    changeLanguage(language) {
        GlobalData.currentLanguage = language;
        localStorage.setItem("language", language);
        this.props.onChangeLanguage();
        this.forceUpdate();
    }

    render() {
        return (
            <li className="dropdown">
                <a className="dropdown-toggle" data-toggle="dropdown" href="#">
                    <div>
                        {GlobalData.languages[GlobalData.currentLanguage].title.replace("${name}", Translations.headerView.languages[GlobalData.currentLanguage][GlobalData.currentLanguage])}
                        &nbsp;
                        <img src={GlobalData.languages[GlobalData.currentLanguage].icon} className="languageIcon" />
                    </div>
                </a>
                <ul className="dropdown-menu">
                    {
                        Object.keys(GlobalData.languages).map((language, index) => {
                            let data = GlobalData.languages[language];
                            let leng = Translations.headerView.languages[language][GlobalData.currentLanguage];
                            return (
                                <li key={index} onClick={() => this.changeLanguage(language)}>
                                    <a>
                                        {data.title.replace("${name}", leng)}
                                        &nbsp;
                                        <img src={data.icon} className="languageIcon" />
                                    </a>
                                </li>
                            )
                        })
                    }
                </ul>
            </li>
        );
    }
}
