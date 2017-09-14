import React, { Component } from 'react';
import InfoModal from './InfoModal';
import StaticDatabase from '../data/StaticDatabase';

export default class Map extends Component {

    constructor(props) {
        super(props);
        this.state = {
            idField: null
        }
    }

    componentDidMount() {

        // create simple map in a specific coordenate
        this.map = new google.maps.Map(this.refs.map, {
            zoom: 5,
            center: { lat: -25.363, lng: 131.044 }
        });

        // define markers
        var markers = StaticDatabase.fields;

        // defined icon and resize it
        var icon = {
            url: 'https://vignette2.wikia.nocookie.net/fantendo/images/c/c9/Football_Ball.png/revision/latest?cb=20100104174227', // url
            scaledSize: new google.maps.Size(30, 30), // scaled size
            origin: new google.maps.Point(0, 0), // origin
            anchor: new google.maps.Point(0, 0) // anchor
        };

        var marker, i;

        // print multiple markers
        for (i = 0; i < markers.length; i++) {

            // define markers in map
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(markers[i][1], markers[i][2]),
                icon: icon,
                map: this.map
            });

            let self = this;

            // event for each marker
            google.maps.event.addListener(marker, 'click', (function (marker, i) {
                return function () {
                    self.openInfo(i);
                }
            })(marker, i));

        }
    }

    openInfo(i) {
        this.setState({ idField: i });
        $('#myModal').modal('show');
    }

    render() {
        return (
            <div>
                <div
                    id="map"
                    ref="map"
                    className="map"
                    style={{
                        width: window.innerWidth + "px",
                        height: window.innerHeight + "px",
                        marginTop: "-25px",
                        marginLeft: "-390px",
                        position: "relative",
                        overflow: "visible"
                    }}>
                </div>
                <InfoModal idField={this.state.idField} />
            </div>
        );
    }
}