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