const trainsData = {
    
        'udarata-menike': {
            name: "Udarata Menike",
            startPoint: "Kandy Fort",
            endPoint: "Colombo Fort",
            departureTime: "2023-07-25 10:00 AM",
            arrivalTime: "2023-07-25 2:00 PM",
            currentStationIndex: 0,
            stations: [
                { name: "Colombo Fort", latitude: 6.93194, longitude: 79.84778 },
                { name: "Polgahawela Fort", latitude: 6.93278, longitude: 79.86556 },
                { name: "Peradeniya Fort", latitude: 6.94361, longitude: 79.87167 }
            ],
            delayStatus: "No Delays"
        },
        'podi-menike': {
            name: "Podi Menike",
            startPoint: "Badulla Fort",
            endPoint: "Colombo Fort",
            departureTime: "2023-07-25 11:30 AM",
            arrivalTime: "2023-07-25 3:30 PM",
            currentStationIndex: 1,
            stations: [
                { name: "Badulla Fort", latitude: 6.93278, longitude: 81.0564 },
                { name: "Nawalapitiya Fort", latitude: 6.9538, longitude: 80.7618 },
                { name: "Polgahawela Fort", latitude: 7.2983, longitude: 80.3882 }
            ],
            delayStatus: "Delayed 15 min"
        },
        'uththaradevi-ice': {
            name: "Uththaradevi ICE",
            startPoint: "Jaffna Fort",
            endPoint: "Kandy Fort",
            departureTime: "2023-07-25 11:30 AM",
            arrivalTime: "2023-07-25 3:30 PM",
            currentStationIndex: 1,
            stations: [
                { name: "Mankulam Fort", latitude: 9.6606, longitude: 80.1046 },
                { name: "Kilinochchi Fort", latitude: 9.3876, longitude: 80.4038 },
                { name: "Jaffna Fort", latitude: 9.6616, longitude: 80.0255 }
            ],
            delayStatus: "No Delays"
        },
        'yal-devi': {
            name: "Yal Devi",
            startPoint: "Mathara Fort",
            endPoint: "Maradana Fort",
            departureTime: "2023-07-25 11:30 AM",
            arrivalTime: "2023-07-25 3:30 PM",
            currentStationIndex: 1,
            stations: [
                { name: "Kurunegala Fort", latitude: 7.4860, longitude: 80.3632 },
                { name: "Vavuniya Fort", latitude: 8.7515, longitude: 80.4984 },
                { name: "Jaffna Fort", latitude: 9.6616, longitude: 80.0255 }
            ],
            delayStatus: "Delayed 15 min"
        },
        'udaya-devi': {
            name: "Udaya Devi (Night Mail)",
            startPoint: "Colombo Fort",
            endPoint: "Batticaloa Fort",
            departureTime: "2023-07-25 11:30 AM",
            arrivalTime: "2023-07-25 3:30 PM",
            currentStationIndex: 1,
            stations: [
                { name: "Polgahawela Fort", latitude: 7.3566, longitude: 80.4939 },
                { name: "Kekirawa Fort", latitude: 8.2309, longitude: 80.4741 },
                { name: "Polonnaruwa Fort", latitude: 7.9394, longitude: 81.0023 }
            ],
            delayStatus: "Delayed 30 min"
        },
    };
    
    // Add more train details here (podi-menike, uththaradevi-ice, yal-devi, udaya-devi)


function trackTrain() {
    const trainId = document.getElementById('train-select').value;
    const trainStatus = trainsData[trainId];

    if (trainStatus) {
        displayTrainStatus(trainStatus);
        displayMap(trainStatus.stations[trainStatus.currentStationIndex].latitude, trainStatus.stations[trainStatus.currentStationIndex].longitude);
    } else {
        alert("Invalid train selection");
    }
}

function displayTrainStatus(status) {
    document.getElementById('start-point').innerText = "Start Point: " + status.startPoint;
    document.getElementById('end-point').innerText = "End Point: " + status.endPoint;
    document.getElementById('departure-time').innerText = "Departure Time: " + status.departureTime;
    document.getElementById('arrival-time').innerText = "Arrival Time: " + status.arrivalTime;
    document.getElementById('current-location').innerText = "Current Location: " + status.stations[status.currentStationIndex].name;
    document.getElementById('delay-status').innerText = "Delay Status: " + status.delayStatus;

    // Alert passenger if there are delays
    if (status.delayStatus.toLowerCase().includes("delayed")) {
        alert("Attention! Your train is currently delayed. Please check the updated schedule and plan your journey accordingly.");
    }

    document.getElementById('train-status').style.display = 'block';
}

function displayMap(latitude, longitude) {
    const map = L.map('map').setView([latitude, longitude], 15);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
    }).addTo(map);

    L.marker([latitude, longitude]).addTo(map)
        .bindPopup("Train Location")
        .openPopup();
}
