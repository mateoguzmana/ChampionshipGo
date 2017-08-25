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
        this.createLanguages.bind(this);
        this.createActualLanguage.bind(this);
    }

    componentDidMount() {
        this.setState({
            languageAuto: localStorage.getItem("language") && localStorage.getItem("language") !== undefined ? localStorage.getItem("language") : "en"
        });

        setTimeout(() => {
            this.setState({
                listLanguages: this.createLanguages(),
                actualLanguage: this.createActualLanguage()
            });
        }, 200);
    }

    changeLanguage(language) {
        this.setState({ languageAuto: language });
        setTimeout(() => {
            this.setState({ 
                listLanguages: this.createLanguages(), 
                actualLanguage: this.createActualLanguage() 
            });
        }, 200);
        localStorage.setItem("language", language);
    }

    createActualLanguage(){
        let data = GlobalData.languages[this.state.languageAuto];
        let leng = Translations.headerView.languages[this.state.languageAuto][this.state.languageAuto];
        return (
            <div>
                {data.title.replace("${name}", leng)}
                &nbsp;
                <img src={data.icon} className="languageIcon" />
            </div>
        );
    }

    createLanguages() {
        return (
            Object.keys(GlobalData.languages).map((language, index) => {
                let data = GlobalData.languages[language];
                let leng = Translations.headerView.languages[language][this.state.languageAuto];
                return (
                    <li key={index} onClick={() => this.changeLanguage(language)}>
                        <a>
                            {data.title.replace("${name}", leng)}
                            &nbsp;
                            <img src={data.icon} className="languageIcon" />
                        </a>
                    </li>
                )
            }
            )
        )
    }

    render() {
        return (
            <li className="dropdown">
                <a className="dropdown-toggle" data-toggle="dropdown" href="#">
                    {this.state.actualLanguage}
                </a>
                <ul className="dropdown-menu">
                    {this.state.listLanguages}
                </ul>
            </li>
        );
    }
}
