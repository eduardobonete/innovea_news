const { createApp } = Vue

createApp({
data() {
  return {
    message: 'Hello Vue!',
    news: [],
    last: [],
  }

},
methods: {
	getNews() {
		var self = this;
		axios.get('/api/news').then(function(res) {
			self.news = res.data.data.articles;
		})
	},
	getLast() {
		var self = this;
		axios.get('/api/last').then(function(res) {
			self.last = res.data.data.articles;
		})
	},
	imgBack(image) {
		return `background-image: url(${image})`;
	}
},
created() {
	this.getNews();
	this.getLast();
}
}).mount('#app')