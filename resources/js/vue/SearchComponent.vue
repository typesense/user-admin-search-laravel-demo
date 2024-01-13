<template>
    <div>
        <input type="text" class="search-input" v-model="query" @input="search" placeholder="Search...">
        <ul>
            <li v-for="result in results" :key="result.id" class="search-result">{{ result.name }} - {{ result.email }}</li>
        </ul>
    </div>
</template>


<script>
export default {
    data() {
        return {
            query: '',
            results: [],
        };
    },
    methods: {
        search() {
            // Call the Laravel API here to fetch search results based on this.query
            axios.get(`/api/search?query=${this.query}`)
                .then(response => {
                    this.results = response.data;
                })
                .catch(error => {
                    console.error(error);
                });
        },
    },
};
</script>


<style scoped>
/* Style the container */
div {
    margin: 20px auto;
    padding: 10px;
    max-width: 800px;
    width: 90%;
    background-color: #ffffff;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    text-align: center;
}

/* Style the search input */
.search-input {
    width: 100%;
    padding: 12px;
    border: none;
    background-color: #f0f0f0;
    border-radius: 5px;
    font-size: 16px;
    outline: none;
}

/* Style the search results list */
ul {
    list-style: none;
    padding: 0;
    margin-top: 20px;
}

/* Style the search result items */
.search-result {
    padding: 10px;
    background-color: #ffffff;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
    margin-top: 10px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

/* Highlight the search result items on hover */
.search-result:hover {
    background-color: #f0f0f0;
}

</style>
