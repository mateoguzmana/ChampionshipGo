import React from 'react';
import ReactDOM from 'react-dom';
import { HashRouter } from 'react-router-dom';
import ChampionshipGo from './components/ChampionshipGo';

window.onload = () => {
    ReactDOM.render(
        <HashRouter>
            <ChampionshipGo />
        </HashRouter>,
        document.querySelector('#container')
    );
};
