import React, { Component } from 'react';
import Translations from '../../data/Translations';
import GlobalData from '../../data/GlobalData';
import Image from '../Image';

export default class Gallery extends Component {

    constructor() {
        super();
        this.state = {
            bigImage: "https://luismiguelguerrero.files.wordpress.com/2009/10/nou.jpg?w=585"
        };

        this.changeImage = this.changeImage.bind(this);
    }

    changeImage(event) {
        this.setState({ bigImage: event.target.src });
    }

    render() {
        return (
            <div className="row">
                <div className="col-sm-3">
                    <div className="col-sm-12">
                        <Image onClick={this.changeImage} classImage={"smallImageField"} image={"https://luismiguelguerrero.files.wordpress.com/2009/10/nou.jpg?w=585"} />
                    </div>
                    <div className="col-sm-12">
                        <Image onClick={this.changeImage} classImage={"smallImageField"} image={"http://colegiokambes.com/kambes2/images/ParaWeb/futbol.jpg"} />
                    </div>
                    <div className="col-sm-12">
                        <Image onClick={this.changeImage} classImage={"smallImageField"} image={"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTASPN16MUKJdPhuFluYPAh_B0GMz6dwzTV75whjI9d6xh3bY5j"} />
                    </div>
                </div>
                <div className="col-sm-9">
                    <Image classImage={"bigImageField"} image={this.state.bigImage} />
                </div>
            </div>
        );
    }
}
