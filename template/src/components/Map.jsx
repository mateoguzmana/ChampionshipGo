import React, { Component } from 'react';

export default class Map extends Component {

  constructor(props) {
    super(props);
  }

  componentDidMount() {
    this.map = new google.maps.Map(this.refs.map, {
      zoom: 5,
      center: { lat: -25.363, lng: 131.044 }
    });


    var markers = [
      ['León', -25.363, 131.044],
      ['Salamanca', -26.363, 135.044],
      ['Zamora', -28.363, 141.044]
    ];

    var marker, i;
    for (i = 0; i < markers.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(markers[i][1], markers[i][2]),
        map: this.map
      });
    }
  }

  render() {
    return (
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
    );
  }
}