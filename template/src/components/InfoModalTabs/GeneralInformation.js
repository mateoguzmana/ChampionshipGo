import React, { Component } from 'react';
import Translations from '../../data/Translations';
import GlobalData from '../../data/GlobalData';

export default class GeneralInformation extends Component {

    constructor() {
        super();
    }

    render() {
        return (
            <div>
                <h3>{`General information about the field number ${this.props.idField}`}</h3>
                <div className="row">
                    <div className="col-sm-6">
                        <table className="table">
                            <tbody>
                                <tr>
                                    <td className="titleTable">Location</td>
                                    <td>Medellín, Colombia</td>
                                </tr>
                                <tr>
                                    <td className="titleTable">Capacity</td>
                                    <td>12 players</td>
                                </tr>
                                <tr>
                                    <td className="titleTable">Field condition</td>
                                    <td>Good</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        );
    }
}
