import React, { Component } from 'react';

export default class Image extends Component {

    constructor() {
        super();
    }

    render() {
        return (
            <img
                onClick={this.props.onClick}
                className={this.props.classImage}
                src={this.props.image}
            />
        );
    }
}
