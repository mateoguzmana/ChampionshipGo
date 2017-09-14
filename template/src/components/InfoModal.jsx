import React, { Component } from 'react';

import Gallery from './InfoModalTabs/Gallery';
import GeneralInformation from './InfoModalTabs/GeneralInformation';

import Translations from '../data/Translations';
import GlobalData from '../data/GlobalData';

export default class InfoModal extends Component {

    constructor() {
        super();
    }

    componentDidMount() {
    }

    render() {
        return (
            <div className="modal fade infoModal" id="myModal" role="dialog">
                <div className="modal-dialog">
                    <div className="modal-content">
                        <div className="modal-header">
                            <button type="button" className="close" data-dismiss="modal">&times;</button>
                            <ul className="nav nav-tabs">
                                <li className="active">
                                    <a href="#1" data-toggle="tab">{Translations.infoModal.generalInformationTab.title[GlobalData.currentLanguage]}</a>
                                </li>
                                <li><a href="#2" data-toggle="tab">{Translations.infoModal.galleryTab.title[GlobalData.currentLanguage]}</a>
                                </li>
                                <li><a href="#3" data-toggle="tab">Availability</a>
                                </li>
                            </ul>
                        </div>
                        <div className="modal-body">
                            <div className="tab-content">
                                <div className="tab-pane active" id="1">
                                    <GeneralInformation idField={this.props.idField}/>
                                </div>
                                <div className="tab-pane" id="2">
                                    <Gallery idField={this.props.idField}/>
                                </div>
                                <div className="tab-pane" id="3">
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
                                </div>
                            </div>
                        </div>
                        <div className="modal-footer">
                            <button type="button" className="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}
