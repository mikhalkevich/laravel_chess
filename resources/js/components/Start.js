import React from 'react';
import ReactDOM from 'react-dom';

function Start() {
    return (
        <div className="container">
            test
        </div>
    );
}

export default Start;

if (document.getElementById('Start')) {
    ReactDOM.render(<Start />, document.getElementById('Start'));
}
