import React, { Component } from 'react';
import { Switch, Route } from 'react-router-dom';
import Map from './Map';
import Contribute from './Contribute';

export default class Body extends Component {

    constructor(props) {
        super(props);

        this.views = {
            map: <Map />,
            contribute: <Contribute />
        };
    }

    openView(props) {
        let view = props.match.params.view;

        return this.views[view];
    }

    render() {
        return (
            <div className="container">
                <Switch>
                    <Route exact path='/' component={Map} />
                    <Route exact path='/:view' render={(props) => (this.openView(props))} />
                </Switch>
            </div>
        );
    }
}
