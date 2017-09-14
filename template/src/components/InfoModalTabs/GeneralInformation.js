import React, { Component } from 'react';
import Translations from '../../data/Translations';
import GlobalData from '../../data/GlobalData';
import StaticDatabase from '../../data/StaticDatabase';
import Spinner from '../Spinner';

export default class GeneralInformation extends Component {

    constructor(props) {
        super(props);
    }

    render() {
        return (
            <div>
                {
                    this.props.idField == undefined
                        ?
                        <Spinner />
                        :
                        <div>
                            <h3>{`General information about ${StaticDatabase.fields[this.props.idField].name} field`}</h3>
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
                }
            </div>
        );
    }
}
