import React, { Component } from 'react';

import GeneralInformation from './InfoModalTabs/GeneralInformation';
import Gallery from './InfoModalTabs/Gallery';
import Schedule from './InfoModalTabs/Schedule';

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
                                <li><a href="#3" data-toggle="tab">Schedule</a>
                                </li>
                            </ul>
                        </div>
                        <div className="modal-body">
                            <div className="tab-content">
                                <div className="tab-pane active" id="1">
                                    <GeneralInformation idField={this.props.idField} />
                                </div>
                                <div className="tab-pane" id="2">
                                    <Gallery idField={this.props.idField} />
                                </div>
                                <div className="tab-pane" id="3">
                                    <Schedule idField={this.props.idField} />
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
