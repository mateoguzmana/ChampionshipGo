import React, { Component } from 'react';
import Translations from '../data/Translations';
import GlobalData from '../data/GlobalData';
import SwitchLanguage from './SwitchLanguage';

export default class Header extends Component {

  constructor(){
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
            <li className="active"><a href="#">Mundial Map</a></li>
          </ul>
          <button className="btn btn-danger navbar-btn">Match!</button>
          <ul className="nav navbar-nav navbar-right">
            <SwitchLanguage />
          </ul>
        </div>
      </nav>
    );
  }
}