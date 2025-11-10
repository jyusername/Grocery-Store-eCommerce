async function fetchAndTransformData(url) {
    const fetchData = async (url) => {
        const response = await fetch(url);
        if (!response.ok) throw new Error(`HTTP error! Status: ${response.status}`);
        return await response.json();
    };

    const processData = (data) => {
        return data
            
            .map(({ id, name, age }) => ({ id, name, ageCategory: age > 50 ? 'Senior' : 'Adult' }))
            .sort((a, b) => b.age - a.age);


    };

    try {
        const data = await fetchData(url);
        const transformedData = processData(data);
        const summary = transformedData.reduce((acc, { ageCategory }) => {
            acc[ageCategory] = (acc[ageCategory] || 0) + 1;
            return acc;
        }, {});
        
        console.log('Transformed Users:', transformedData);
        console.log('Age Category Summary:', summary);
    } catch (error) {
        console.error('Error fetching or processing data:', error);
    }
}

const apiUrl = 'https://jsonplaceholder.typicode.com/users';
fetchAndTransformData(apiUrl);


async function fetchAndTransformData(url) {
    const fetchData = async (url) => {
        const response = await fetch(url);
        if (!response.ok) throw new Error(`HTTP error! Status: ${response.status}`);
        return await response.json();
    };

    const processData = (data) => {
        return data
            
            .map(({ id, name, age }) => ({ id, name, ageCategory: age > 50 ? 'Senior' : 'Adult' }))
            .sort((a, b) => b.age - a.age);


    };

    try {
        const data = await fetchData(url);
        const transformedData = processData(data);
        const summary = transformedData.reduce((acc, { ageCategory }) => {
            acc[ageCategory] = (acc[ageCategory] || 0) + 1;
            return acc;
        }, {});
        
        console.log('Transformed Users:', transformedData);
        console.log('Age Category Summary:', summary);
    } catch (error) {
        console.error('Error fetching or processing data:', error);
    }
}

const apiUrl = 'https://jsonplaceholder.typicode.com/users';
fetchAndTransformData(apiUrl);



// .filter(({ age }) => age > 30)

async function fetch(){
    apoe asklfpj asl dpasmwewo asyn function await chuchuchuchuchuc
}

async function fetchAndTransformData(url) {
    const fetchData = async (url) => {
        const response = await fetch(url);
        if (!response.ok) throw new Error(`HTTP error! Status: ${response.status}`);
        return await response.json();
    };

    const processData = (data) => {
        return data
            
            .map(({ id, name, age }) => ({ id, name, ageCategory: age > 50 ? 'Senior' : 'Adult' }))
            .sort((a, b) => b.age - a.age);


    };

    try {
        const data = await fetchData(url);
        const transformedData = processData(data);
        const summary = transformedData.reduce((acc, { ageCategory }) => {
            acc[ageCategory] = (acc[ageCategory] || 0) + 1;
            return acc;
        }, {});
        
        console.log('Transformed Users:', transformedData);
        console.log('Age Category Summary:', summary);
    } catch (error) {
        console.error('Error fetching or processing data:', error);
    }
}

const apiUrl = 'https://jsonplaceholder.typicode.com/users';
fetchAndTransformData(apiUrl);



// .filter(({ age }) => age > 30)

async function fetch(){
    apoe asklfpj asl dpasmwewo asyn function await chuchuchuchuchuc
}


// .filter(({ age }) => age > 30)

async function fetch(){
    apoe asklfpj asl dpasmwewo asyn function await chuchuchuchuchuc
}