import React from 'react';
import ReactDOM from 'react-dom';
import ChampionshipGo from './components/ChampionshipGo';

window.onload = () => {
  ReactDOM.render(
    <ChampionshipGo />,
    document.querySelector('#container')
  );
};
