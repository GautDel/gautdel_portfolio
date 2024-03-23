import { fetchWeatherApi } from 'openmeteo'

export default async function getWeather() {
    try{
    const params = {
        "latitude": 43.834591,
        "longitude": 4.360860,
        "current": "temperature_80m"
    };
    const url = "https://api.open-meteo.com/v1/forecast";
    const responses = await fetchWeatherApi(url, params);
        // Helper function to form time ranges
        const range = (start, stop, step) =>
            Array.from({ length: (stop - start) / step }, (_, i) => start + i * step);

        // Process first location. Add a for-loop for multiple locations or weather models
        const response = responses[0];

        // Attributes for timezone and location
        const utcOffsetSeconds = response.utcOffsetSeconds();
        const timezone = response.timezone();
        const timezoneAbbreviation = response.timezoneAbbreviation();
        const latitude = response.latitude();
        const longitude = response.longitude();

        const current = response.current();

        // Note: The order of weather variables in the URL query and the indices below need to match!
        const weatherData = {
            current: {
                time: new Date((Number(current.time()) + utcOffsetSeconds) * 1000),
                apparentTemperature: current.variables(0).value(),
            },
        };

        return Math.ceil(weatherData.current.apparentTemperature);

    } catch(err) {
        console.log(err)
    }

}
