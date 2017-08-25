import React, { Component } from 'react';
import Map from './Map';

export default class Body extends Component {

    constructor(props) {
        super(props);
    }

    render() {
        return (
            <div className="container">
                    <Map />
            </div>
        );
    }
}
