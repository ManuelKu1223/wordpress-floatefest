import Vue from 'vue'

new Vue({
  el: '#app',
  data: {
    title: '<span>You recently purchased a Weekend Pass to Float Fest that includes one day of your choice of tubing.</span><span>Due to high demand we need to know in advance what day you would like to tube.</span>',
    thanks: '<span>Thank You!</span><span>See You At The Ranch!</span>',
    question: 'Which day do you want to be assigned Tubing?',
    formURL: 'https://docs.google.com/forms/d/e/1FAIpQLSd0pyQcckTR4dBKcPCyVcPkPciHoc4sQUuQyUS9_Oub1vugcA/formResponse',
    sendy: 'http://sendy.floatfest.net/unsubscribe',
    sendyListID: 'xMiyztk5eNXPPO4IdMNkaw',
    send: false,
    selectedDay: '',
    userID: '',
    userEmail: '',
    days: [
      { val: 'Saturday' },
      { val: 'Sunday' },
    ],
  },
  methods: {
    onSubmit: function(e) {
      e.preventDefault()

      if (this.selectedDay == '') {
        alert('Make sure you have selected a day!');
      } else if (this.userID == null){
        alert("We couldn't fetch your order number. Please let us know about this error.");
      } else {
        $.ajax({
          url: this.formURL,
          data: {
            formkey: '1FAIpQLSd0pyQcckTR4dBKcPCyVcPkPciHoc4sQUuQyUS9_Oub1vugcA',
            'entry.873729226': this.userID,
            'entry.1429926660': this.selectedDay,
          },
          type: 'POST',
          dataType: "xml",
          statusCode: {
            0: function() {
              this.send = true;
            },
            200: function() {
              this.send = true;
            },
          },
        });

        this.send = true;

        $.ajax({
          url: this.sendy,
          data: {
            email: this.userEmail,
            list: this.sendyListID,
            boolean: true,
          },
          type: 'POST',
        });
      }

    },
  },
  mounted: function() {
    this.userID = getParameterByName('id');
    this.userEmail = getParameterByName('email');
  },
});

function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}
