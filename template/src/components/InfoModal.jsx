import React, { Component } from 'react';
import Translations from '../data/Translations';

export default class InfoModal extends Component {

    constructor() {
        super();
    }

    componentDidMount(){
        
        let self = this; 

        $(".smallImageField").click(function(){

            let image = $(this).attr("src");
            self.changeImage(image);

        });
    }

    changeImage(image){
        $(".bigImageField").attr("src", image);
    }

    render() {
        return (
            <div className="modal fade infoModal" id="myModal" role="dialog">
                <div className="modal-dialog">
                    <div className="modal-content">
                        <div className="modal-header">
                            <button type="button" className="close" data-dismiss="modal">&times;</button>
                            <h4 className="modal-title">Barichara field {this.props.idField}</h4>
                        </div>
                        <div className="modal-body">
                            <div className="row">
                                <div className="col-sm-3">
                                    <div className="col-sm-12">
                                        <img
                                            className="smallImageField"
                                            src="https://luismiguelguerrero.files.wordpress.com/2009/10/nou.jpg?w=585"
                                        />
                                    </div>
                                    <div className="col-sm-12">
                                        <img
                                        className="smallImageField"
                                        src="http://colegiokambes.com/kambes2/images/ParaWeb/futbol.jpg"
                                        />
                                    </div>
                                    <div className="col-sm-12">
                                        <img
                                        className="smallImageField"
                                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTASPN16MUKJdPhuFluYPAh_B0GMz6dwzTV75whjI9d6xh3bY5j"
                                        />
                                    </div>
                                </div>
                                <div className="col-sm-9">
                                    <img
                                        className="bigImageField"
                                        src="https://luismiguelguerrero.files.wordpress.com/2009/10/nou.jpg?w=585"
                                    />
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
