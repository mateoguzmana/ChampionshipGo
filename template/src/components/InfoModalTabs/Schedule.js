import React, { Component } from 'react';
import Translations from '../../data/Translations';
import GlobalData from '../../data/GlobalData';

export default class Schedule extends Component {

    constructor() {
        super();
    }

    render() {
        return (
            <div className="row">
                <div className="col-sm-3">&nbsp;</div>
                <div className="col-sm-6">
                    <table className="table">
                        <thead>
                            <tr>
                                <td className="titleTable">Event</td>
                                <td className="titleTable">Date</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Match</td>
                                <td>date</td>
                            </tr>
                            <tr>
                                <td>Match</td>
                                <td>date</td>
                            </tr>
                            <tr>
                                <td>Match</td>
                                <td>date</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div className="col-sm-3">&nbsp;</div>
            </div>
        );
    }
}
