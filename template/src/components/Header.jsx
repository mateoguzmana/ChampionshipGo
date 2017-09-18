import React, { Component } from 'react';
import { Link } from 'react-router-dom';
import Translations from '../data/Translations';
import GlobalData from '../data/GlobalData';
import SwitchLanguage from './SwitchLanguage';

export default class Header extends Component {

  constructor() {
    super();
  }

  render() {
    return (
      <nav className="navbar navbar-inverse">
        <div className="container-fluid">
          <div className="navbar-header">
            <a className="navbar-brand" href="#">ChampionshipGo</a>
          </div>
          <ul className="nav navbar-nav">
            <li className="active">
              <Link to={`/map`}>{Translations.headerView.worldMapTitle[GlobalData.currentLanguage]}</Link>
            </li>
            <li>
              <Link to={`/contribute`}>{Translations.headerView.contributeTitle[GlobalData.currentLanguage]}</Link>
            </li>
          </ul>
          <button className="btn btn-danger navbar-btn">{Translations.headerView.matchTitle[GlobalData.currentLanguage]}</button>
          <ul className="nav navbar-nav navbar-right">
            <SwitchLanguage onChangeLanguage={() => { this.forceUpdate() }} />
          </ul>
        </div>
      </nav>
    );
  }
}
