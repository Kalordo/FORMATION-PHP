function fetchUrl(url) {
  return fetch(url).then(response => console.log(response.json()));
}