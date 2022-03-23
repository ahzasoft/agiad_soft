<!DOCTYPE html>
<!-- saved from url=(0037)https://app.azhasoft.com/docs/ -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>AZHA SOFT API Reference</title>

    <link rel="stylesheet" href="/docss/style.css">
    <script src="/docss/all.js" type="text/javascript"></script>


          <script type="text/javascript">
        $(function() {
            setupLanguages(["bash","javascript"]);
        });
      </script>
      <script data-dapp-detection="">!function(){let e=!1;function n(){if(!e){const n=document.createElement("meta");n.name="dapp-detected",document.head.appendChild(n),e=!0}}if(window.hasOwnProperty("ethereum")){if(window.__disableDappDetectionInsertion=!0,void 0===window.ethereum)return;n()}else{var t=window.ethereum;Object.defineProperty(window,"ethereum",{configurable:!0,enumerable:!1,set:function(e){window.__disableDappDetectionInsertion||n(),t=e},get:function(){if(!window.__disableDappDetectionInsertion){const e=arguments.callee;e&&e.caller&&e.caller.toString&&-1!==e.caller.toString().indexOf("getOwnPropertyNames")||n()}return t}})}}();</script></head>

  <body class="">
    <a href="https://app.azhasoft.com/docs/#" id="nav-button">
      <span>
        NAV
        <img src="navbar.png">
      </span>
    </a>
    <div class="tocify-wrapper">
        <img src="./logo.png">
                    <div class="lang-selector">
                                  <a href="https://app.azhasoft.com/docs/#" data-language-name="bash" class="active">bash</a>
                                  <a href="https://app.azhasoft.com/docs/#" data-language-name="javascript">javascript</a>
                            </div>
                            <div class="search">
              <input type="text" class="search" id="input-search" placeholder="Search">
            </div>
            <ul class="search-results"></ul>
              <div id="toc" class="tocify">
      <ul id="tocify-header0" class="tocify-header"><li class="tocify-item tocify-focus" data-unique="info"><a>Info</a></li></ul><ul id="tocify-header1" class="tocify-header"><li class="tocify-item" data-unique="authentication"><a>Authentication</a></li></ul><ul id="tocify-header2" class="tocify-header"><li class="tocify-item" data-unique="attendance-management" style="cursor: pointer;"><a>Attendance management</a></li><ul class="tocify-subheader" data-tag="2"><li class="tocify-item" data-unique="get-attendance"><a>Get Attendance</a></li><li class="tocify-item" data-unique="clock-in"><a>Clock In</a></li><li class="tocify-item" data-unique="clock-out"><a>Clock Out</a></li><li class="tocify-item" data-unique="list-holidays"><a>List Holidays</a></li></ul></ul><ul id="tocify-header3" class="tocify-header"><li class="tocify-item" data-unique="brand-management" style="cursor: pointer;"><a>Brand management</a></li><ul class="tocify-subheader" data-tag="2"><li class="tocify-item" data-unique="list-brands"><a>List brands</a></li><li class="tocify-item" data-unique="get-the-specified-brand"><a>Get the specified brand</a></li></ul></ul><ul id="tocify-header4" class="tocify-header"><li class="tocify-item" data-unique="business-location-management" style="cursor: pointer;"><a>Business Location management</a></li><ul class="tocify-subheader" data-tag="2"><li class="tocify-item" data-unique="list-business-locations"><a>List business locations</a></li><li class="tocify-item" data-unique="get-the-specified-business-location"><a>Get the specified business location</a></li></ul></ul><ul id="tocify-header5" class="tocify-header"><li class="tocify-item" data-unique="cash-register-management"><a>Cash register management</a></li><ul class="tocify-subheader" data-tag="2"><li class="tocify-item" data-unique="list-cash-registers"><a>List Cash Registers</a></li><li class="tocify-item" data-unique="create-cash-register"><a>Create Cash Register</a></li><li class="tocify-item" data-unique="get-the-specified-register"><a>Get the specified Register</a></li></ul></ul><ul id="tocify-header6" class="tocify-header"><li class="tocify-item" data-unique="contact-management" style="cursor: pointer;"><a>Contact management</a></li><ul class="tocify-subheader" data-tag="2"><li class="tocify-item" data-unique="list-contact"><a>List contact</a></li><li class="tocify-item" data-unique="create-contact"><a>Create contact</a></li><li class="tocify-item" data-unique="get-the-specified-contact"><a>Get the specified contact</a></li><li class="tocify-item" data-unique="update-contact"><a>Update contact</a></li><li class="tocify-item" data-unique="contact-payment"><a>Contact payment</a></li></ul></ul><ul id="tocify-header7" class="tocify-header"><li class="tocify-item" data-unique="expense-management"><a>Expense management</a></li><ul class="tocify-subheader" data-tag="2"><li class="tocify-item" data-unique="list-expenses"><a>List expenses</a></li><li class="tocify-item" data-unique="create-expense-expense-refund"><a>Create expense / expense refund</a></li><li class="tocify-item" data-unique="get-the-specified-expense-expense-refund"><a>Get the specified expense / expense refund</a></li><li class="tocify-item" data-unique="update-expense-expense-refund"><a>Update expense / expense refund</a></li><li class="tocify-item" data-unique="list-expense-refunds"><a>List expense refunds</a></li></ul></ul><ul id="tocify-header8" class="tocify-header"><li class="tocify-item" data-unique="product-management" style="cursor: pointer;"><a>Product management</a></li><ul class="tocify-subheader" data-tag="2"><li class="tocify-item" data-unique="list-products"><a>List products</a></li><li class="tocify-item" data-unique="get-the-specified-product"><a>Get the specified product</a></li><li class="tocify-item" data-unique="list-selling-price-group"><a>List Selling Price Group</a></li><li class="tocify-item" data-unique="list-variations"><a>List Variations</a></li></ul></ul><ul id="tocify-header9" class="tocify-header"><li class="tocify-item" data-unique="sales-management" style="cursor: pointer;"><a>Sales management</a></li><ul class="tocify-subheader" data-tag="2"><li class="tocify-item" data-unique="list-sells"><a>List sells</a></li><li class="tocify-item" data-unique="create-sell"><a>Create sell</a></li><li class="tocify-item" data-unique="get-the-specified-sell"><a>Get the specified sell</a></li><li class="tocify-item" data-unique="update-sell"><a>Update sell</a></li><li class="tocify-item" data-unique="delete-sell"><a>Delete Sell</a></li><li class="tocify-item" data-unique="add-sell-return"><a>Add Sell Return</a></li><li class="tocify-item" data-unique="list-sell-return"><a>List Sell Return</a></li><li class="tocify-item" data-unique="update-shipping-status"><a>Update shipping status</a></li></ul></ul><ul id="tocify-header10" class="tocify-header"><li class="tocify-item" data-unique="superadmin"><a>Superadmin</a></li><ul class="tocify-subheader" data-tag="2"><li class="tocify-item" data-unique="get-active-subscription-details"><a>Get active subscription details</a></li><li class="tocify-item" data-unique="get-superadmin-package-list"><a>Get Superadmin Package List</a></li></ul></ul><ul id="tocify-header11" class="tocify-header"><li class="tocify-item" data-unique="table-management"><a>Table management</a></li><ul class="tocify-subheader" data-tag="2"><li class="tocify-item" data-unique="list-tables"><a>List tables</a></li><li class="tocify-item" data-unique="show-the-specified-table"><a>Show the specified table</a></li></ul></ul><ul id="tocify-header12" class="tocify-header"><li class="tocify-item" data-unique="tax-management"><a>Tax management</a></li><ul class="tocify-subheader" data-tag="2"><li class="tocify-item" data-unique="list-taxes"><a>List taxes</a></li><li class="tocify-item" data-unique="get-the-specified-tax"><a>Get the specified tax</a></li></ul></ul><ul id="tocify-header13" class="tocify-header"><li class="tocify-item" data-unique="taxonomy-management"><a>Taxonomy management</a></li><ul class="tocify-subheader" data-tag="2"><li class="tocify-item" data-unique="list-taxonomy"><a>List taxonomy</a></li><li class="tocify-item" data-unique="get-the-specified-taxonomy"><a>Get the specified taxonomy</a></li></ul></ul><ul id="tocify-header14" class="tocify-header"><li class="tocify-item" data-unique="types-of-service-management"><a>Types of service management</a></li><ul class="tocify-subheader" data-tag="2"><li class="tocify-item" data-unique="list-types-of-service"><a>List types of service</a></li><li class="tocify-item" data-unique="get-the-specified-types-of-service"><a>Get the specified types of service</a></li></ul></ul><ul id="tocify-header15" class="tocify-header"><li class="tocify-item" data-unique="unit-management"><a>Unit management</a></li><ul class="tocify-subheader" data-tag="2"><li class="tocify-item" data-unique="list-units"><a>List units</a></li><li class="tocify-item" data-unique="get-the-specified-unit"><a>Get the specified unit</a></li></ul></ul><ul id="tocify-header16" class="tocify-header"><li class="tocify-item" data-unique="user-management"><a>User management</a></li><ul class="tocify-subheader" data-tag="2"><li class="tocify-item" data-unique="get-the-loggedin-user-details"><a>Get the loggedin user details.</a></li><li class="tocify-item" data-unique="list-users"><a>List users</a></li><li class="tocify-item" data-unique="get-the-specified-user"><a>Get the specified user</a></li><li class="tocify-item" data-unique="update-user-password"><a>Update user password.</a></li></ul></ul><ul id="tocify-header17" class="tocify-header"><li class="tocify-item" data-unique="general"><a>general</a></li><ul class="tocify-subheader" data-tag="2"><li class="tocify-item" data-unique="list-payment-accounts"><a>List payment accounts</a></li><li class="tocify-item" data-unique="list-payment-methods"><a>List payment methods</a></li><li class="tocify-item" data-unique="get-business-details"><a>Get business details</a></li><li class="tocify-item" data-unique="get-profit-and-loss-report"><a>Get profit and loss report</a></li><li class="tocify-item" data-unique="get-product-current-stock"><a>Get product current stock</a></li><li class="tocify-item" data-unique="get-notifications"><a>Get notifications</a></li></ul></ul></div>
                    <ul class="toc-footer">
                                  <li><a href="https://github.com/mpociot/documentarian">Documentation Powered by Documentarian</a></li>
                            </ul>
            </div>
    <div class="page-wrapper">
      <div class="dark-box"></div>
      <div class="content">
          <!-- START_INFO -->
<div name="info" data-unique="info"></div><h1 id="info">Info</h1>
<p>Welcome to AZHA SOFT the generated API reference.
<a href="https://app.azhasoft.com/docs/collection.json">Get Postman Collection</a></p>
<!-- END_INFO -->
<div name="authentication" data-unique="authentication"></div><h1 id="authentication">Authentication</h1>
<ul>
    <li>Login to the application and navigate to <code>/connector/client</code></li>
    <li>Create new client and generate <code>Client ID</code> and <code>Client secret</code></li>
    <li>Once you have created the client, you may request an access token by issuing a POST request to the /oauth/token route <br>

<code>
    $http = new GuzzleHttp\Client;<br>
    $response = $http-&gt;post('http://app.azhasoft.com/oauth/token', <br>
                    [<br>
                        'form_params' =&gt; [<br>
                            'grant_type' =&gt; 'password',<br>
                            'client_id' =&gt; 'client-id',<br>
                            'client_secret' =&gt; 'client-secret',<br>
                            'username' =&gt; 'taylor@laravel.com',<br>
                            'password' =&gt; 'my-password',<br>
                            'scope' =&gt; '',<br>
                        ],
                    ]);
</code>
</li>
</ul>
<div name="attendance-management" data-unique="attendance-management"></div><h1 id="attendance-management">Attendance management</h1>
<!-- START_9ae23d9501cf189191c42c7a11186348 -->
<div name="get-attendance" data-unique="get-attendance"></div><h2 id="get-attendance">Get Attendance</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre style="display: block;"><code class="language-bash hljs">curl -X GET \
    -G <span class="hljs-string">"https://app.azhasoft.com/connector/api/get-attendance/1"</span> \
    -H <span class="hljs-string">"Content-Type: application/json"</span> \
    -H <span class="hljs-string">"Accept: application/json"</span> \
    -H <span class="hljs-string">"Authorization: Bearer {token}"</span></code></pre>
<pre style="display: none;"><code class="language-javascript hljs"><span class="hljs-keyword">const</span> url = <span class="hljs-keyword">new</span> URL(
    <span class="hljs-string">"https://app.azhasoft.com/connector/api/get-attendance/1"</span>
);

<span class="hljs-keyword">let</span> headers = {
    <span class="hljs-string">"Content-Type"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Accept"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Authorization"</span>: <span class="hljs-string">"Bearer {token}"</span>,
};

fetch(url, {
    method: <span class="hljs-string">"GET"</span>,
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; <span class="hljs-built_in">console</span>.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json hljs">{
    "<span class="hljs-attr">data</span>": {
        "<span class="hljs-attr">id</span>": <span class="hljs-number">4</span>,
        "<span class="hljs-attr">user_id</span>": <span class="hljs-number">1</span>,
        "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
        "<span class="hljs-attr">clock_in_time</span>": <span class="hljs-string">"2020-09-12 13:13:00"</span>,
        "<span class="hljs-attr">clock_out_time</span>": <span class="hljs-string">"2020-09-12 13:15:00"</span>,
        "<span class="hljs-attr">essentials_shift_id</span>": <span class="hljs-number">3</span>,
        "<span class="hljs-attr">ip_address</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">clock_in_note</span>": <span class="hljs-string">"test clock in from api"</span>,
        "<span class="hljs-attr">clock_out_note</span>": <span class="hljs-string">"test clock out from api"</span>,
        "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2020-09-12 13:14:39"</span>,
        "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2020-09-12 13:15:39"</span>
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET connector/api/get-attendance/{user_id}</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>user_id</code></td>
<td>required</td>
<td>id of the user</td>
</tr>
</tbody>
</table>
<!-- END_9ae23d9501cf189191c42c7a11186348 -->
<!-- START_86034849f2363a6ed4cbb02ef6ad64c9 -->
<div name="clock-in" data-unique="clock-in"></div><h2 id="clock-in">Clock In</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre style="display: block;"><code class="language-bash hljs">curl -X POST \
    <span class="hljs-string">"https://app.azhasoft.com/connector/api/clock-in"</span> \
    -H <span class="hljs-string">"Content-Type: application/json"</span> \
    -H <span class="hljs-string">"Accept: application/json"</span> \
    -H <span class="hljs-string">"Authorization: Bearer {token}"</span> \
    <span class="hljs-_">-d</span> <span class="hljs-string">'{"user_id":1,"clock_in_time":"2000-06-13 13:13:00","clock_in_note":"impedit","ip_address":"eos"}'</span>
</code></pre>
<pre style="display: none;"><code class="language-javascript hljs"><span class="hljs-keyword">const</span> url = <span class="hljs-keyword">new</span> URL(
    <span class="hljs-string">"https://app.azhasoft.com/connector/api/clock-in"</span>
);

<span class="hljs-keyword">let</span> headers = {
    <span class="hljs-string">"Content-Type"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Accept"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Authorization"</span>: <span class="hljs-string">"Bearer {token}"</span>,
};

<span class="hljs-keyword">let</span> body = {
    <span class="hljs-string">"user_id"</span>: <span class="hljs-number">1</span>,
    <span class="hljs-string">"clock_in_time"</span>: <span class="hljs-string">"2000-06-13 13:13:00"</span>,
    <span class="hljs-string">"clock_in_note"</span>: <span class="hljs-string">"impedit"</span>,
    <span class="hljs-string">"ip_address"</span>: <span class="hljs-string">"eos"</span>
}

fetch(url, {
    method: <span class="hljs-string">"POST"</span>,
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; <span class="hljs-built_in">console</span>.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json hljs">{
    "<span class="hljs-attr">success</span>": <span class="hljs-literal">true</span>,
    "<span class="hljs-attr">msg</span>": <span class="hljs-string">"Clocked In successfully"</span>,
    "<span class="hljs-attr">type</span>": <span class="hljs-string">"clock_in"</span>
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST connector/api/clock-in</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>user_id</code></td>
<td>integer</td>
<td>required</td>
<td>id of the user</td>
</tr>
<tr>
<td><code>clock_in_time</code></td>
<td>string</td>
<td>optional</td>
<td>Clock in time.If not given current date time will be used Fromat: Y-m-d H:i:s</td>
</tr>
<tr>
<td><code>clock_in_note</code></td>
<td>string</td>
<td>optional</td>
<td>Clock in note.</td>
</tr>
<tr>
<td><code>ip_address</code></td>
<td>string</td>
<td>optional</td>
<td>IP address.</td>
</tr>
</tbody>
</table>
<!-- END_86034849f2363a6ed4cbb02ef6ad64c9 -->
<!-- START_ef6b9e3a21e12aef21cc7ca8267097a1 -->
<div name="clock-out" data-unique="clock-out"></div><h2 id="clock-out">Clock Out</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre style="display: block;"><code class="language-bash hljs">curl -X POST \
    <span class="hljs-string">"https://app.azhasoft.com/connector/api/clock-out"</span> \
    -H <span class="hljs-string">"Content-Type: application/json"</span> \
    -H <span class="hljs-string">"Accept: application/json"</span> \
    -H <span class="hljs-string">"Authorization: Bearer {token}"</span> \
    <span class="hljs-_">-d</span> <span class="hljs-string">'{"user_id":1,"clock_out_time":"2000-06-13 13:13:00","clock_out_note":"voluptatem"}'</span>
</code></pre>
<pre style="display: none;"><code class="language-javascript hljs"><span class="hljs-keyword">const</span> url = <span class="hljs-keyword">new</span> URL(
    <span class="hljs-string">"https://app.azhasoft.com/connector/api/clock-out"</span>
);

<span class="hljs-keyword">let</span> headers = {
    <span class="hljs-string">"Content-Type"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Accept"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Authorization"</span>: <span class="hljs-string">"Bearer {token}"</span>,
};

<span class="hljs-keyword">let</span> body = {
    <span class="hljs-string">"user_id"</span>: <span class="hljs-number">1</span>,
    <span class="hljs-string">"clock_out_time"</span>: <span class="hljs-string">"2000-06-13 13:13:00"</span>,
    <span class="hljs-string">"clock_out_note"</span>: <span class="hljs-string">"voluptatem"</span>
}

fetch(url, {
    method: <span class="hljs-string">"POST"</span>,
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; <span class="hljs-built_in">console</span>.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json hljs">{
    "<span class="hljs-attr">success</span>": <span class="hljs-literal">true</span>,
    "<span class="hljs-attr">msg</span>": <span class="hljs-string">"Clocked Out successfully"</span>,
    "<span class="hljs-attr">type</span>": <span class="hljs-string">"clock_out"</span>
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST connector/api/clock-out</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>user_id</code></td>
<td>integer</td>
<td>required</td>
<td>id of the user</td>
</tr>
<tr>
<td><code>clock_out_time</code></td>
<td>string</td>
<td>optional</td>
<td>Clock out time.If not given current date time will be used Fromat: Y-m-d H:i:s</td>
</tr>
<tr>
<td><code>clock_out_note</code></td>
<td>string</td>
<td>optional</td>
<td>Clock out note.</td>
</tr>
</tbody>
</table>
<!-- END_ef6b9e3a21e12aef21cc7ca8267097a1 -->
<!-- START_eeb42bc2e93c8f36f4bb83992f9334f9 -->
<div name="list-holidays" data-unique="list-holidays"></div><h2 id="list-holidays">List Holidays</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre style="display: block;"><code class="language-bash hljs">curl -X GET \
    -G <span class="hljs-string">"https://app.azhasoft.com/connector/api/holidays?location_id=voluptatem&amp;start_date=2020-06-25&amp;end_date=2020-06-25"</span> \
    -H <span class="hljs-string">"Content-Type: application/json"</span> \
    -H <span class="hljs-string">"Accept: application/json"</span> \
    -H <span class="hljs-string">"Authorization: Bearer {token}"</span></code></pre>
<pre style="display: none;"><code class="language-javascript hljs"><span class="hljs-keyword">const</span> url = <span class="hljs-keyword">new</span> URL(
    <span class="hljs-string">"https://app.azhasoft.com/connector/api/holidays"</span>
);

<span class="hljs-keyword">let</span> params = {
    <span class="hljs-string">"location_id"</span>: <span class="hljs-string">"voluptatem"</span>,
    <span class="hljs-string">"start_date"</span>: <span class="hljs-string">"2020-06-25"</span>,
    <span class="hljs-string">"end_date"</span>: <span class="hljs-string">"2020-06-25"</span>,
};
<span class="hljs-built_in">Object</span>.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

<span class="hljs-keyword">let</span> headers = {
    <span class="hljs-string">"Content-Type"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Accept"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Authorization"</span>: <span class="hljs-string">"Bearer {token}"</span>,
};

fetch(url, {
    method: <span class="hljs-string">"GET"</span>,
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; <span class="hljs-built_in">console</span>.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json hljs">{
    "<span class="hljs-attr">data</span>": [
        {
            "<span class="hljs-attr">id</span>": <span class="hljs-number">2</span>,
            "<span class="hljs-attr">name</span>": <span class="hljs-string">"Independence Day"</span>,
            "<span class="hljs-attr">start_date</span>": <span class="hljs-string">"2020-08-15"</span>,
            "<span class="hljs-attr">end_date</span>": <span class="hljs-string">"2020-09-15"</span>,
            "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">location_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">note</span>": <span class="hljs-string">"test holiday"</span>,
            "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2020-09-15 11:25:56"</span>,
            "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2020-09-15 11:25:56"</span>
        }
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET connector/api/holidays</code></p>
<h4>Query Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>location_id</code></td>
<td>optional</td>
<td>id of the location</td>
</tr>
<tr>
<td><code>start_date</code></td>
<td>optional</td>
<td>format:Y-m-d</td>
</tr>
<tr>
<td><code>end_date</code></td>
<td>optional</td>
<td>format:Y-m-d</td>
</tr>
</tbody>
</table>
<!-- END_eeb42bc2e93c8f36f4bb83992f9334f9 -->
<div name="brand-management" data-unique="brand-management"></div><h1 id="brand-management">Brand management</h1>
<!-- START_86f2ea444a3e2e0add4c92cf461b2468 -->
<div name="list-brands" data-unique="list-brands"></div><h2 id="list-brands">List brands</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre style="display: block;"><code class="language-bash hljs">curl -X GET \
    -G <span class="hljs-string">"https://app.azhasoft.com/connector/api/brand"</span> \
    -H <span class="hljs-string">"Content-Type: application/json"</span> \
    -H <span class="hljs-string">"Accept: application/json"</span> \
    -H <span class="hljs-string">"Authorization: Bearer {token}"</span></code></pre>
<pre style="display: none;"><code class="language-javascript hljs"><span class="hljs-keyword">const</span> url = <span class="hljs-keyword">new</span> URL(
    <span class="hljs-string">"https://app.azhasoft.com/connector/api/brand"</span>
);

<span class="hljs-keyword">let</span> headers = {
    <span class="hljs-string">"Content-Type"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Accept"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Authorization"</span>: <span class="hljs-string">"Bearer {token}"</span>,
};

fetch(url, {
    method: <span class="hljs-string">"GET"</span>,
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; <span class="hljs-built_in">console</span>.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json hljs">{
    "<span class="hljs-attr">data</span>": [
        {
            "<span class="hljs-attr">id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">name</span>": <span class="hljs-string">"Levis"</span>,
            "<span class="hljs-attr">description</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">created_by</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">deleted_at</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2018-01-03 21:19:47"</span>,
            "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2018-01-03 21:19:47"</span>
        },
        {
            "<span class="hljs-attr">id</span>": <span class="hljs-number">2</span>,
            "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">name</span>": <span class="hljs-string">"Espirit"</span>,
            "<span class="hljs-attr">description</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">created_by</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">deleted_at</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2018-01-03 21:19:58"</span>,
            "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2018-01-03 21:19:58"</span>
        }
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET connector/api/brand</code></p>
<!-- END_86f2ea444a3e2e0add4c92cf461b2468 -->
<!-- START_d1614880df4d370cfc4ed7ec60bcf52c -->
<div name="get-the-specified-brand" data-unique="get-the-specified-brand"></div><h2 id="get-the-specified-brand">Get the specified brand</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre style="display: block;"><code class="language-bash hljs">curl -X GET \
    -G <span class="hljs-string">"https://app.azhasoft.com/connector/api/brand/1"</span> \
    -H <span class="hljs-string">"Content-Type: application/json"</span> \
    -H <span class="hljs-string">"Accept: application/json"</span> \
    -H <span class="hljs-string">"Authorization: Bearer {token}"</span></code></pre>
<pre style="display: none;"><code class="language-javascript hljs"><span class="hljs-keyword">const</span> url = <span class="hljs-keyword">new</span> URL(
    <span class="hljs-string">"https://app.azhasoft.com/connector/api/brand/1"</span>
);

<span class="hljs-keyword">let</span> headers = {
    <span class="hljs-string">"Content-Type"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Accept"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Authorization"</span>: <span class="hljs-string">"Bearer {token}"</span>,
};

fetch(url, {
    method: <span class="hljs-string">"GET"</span>,
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; <span class="hljs-built_in">console</span>.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json hljs">{
    "<span class="hljs-attr">data</span>": [
        {
            "<span class="hljs-attr">id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">name</span>": <span class="hljs-string">"Levis"</span>,
            "<span class="hljs-attr">description</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">created_by</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">deleted_at</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2018-01-03 21:19:47"</span>,
            "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2018-01-03 21:19:47"</span>
        }
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET connector/api/brand/{brand}</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>brand</code></td>
<td>required</td>
<td>comma separated ids of the brands</td>
</tr>
</tbody>
</table>
<!-- END_d1614880df4d370cfc4ed7ec60bcf52c -->
<div name="business-location-management" data-unique="business-location-management"></div><h1 id="business-location-management">Business Location management</h1>
<!-- START_c072951d4602fe0a03aff23281064400 -->
<div name="list-business-locations" data-unique="list-business-locations"></div><h2 id="list-business-locations">List business locations</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre style="display: block;"><code class="language-bash hljs">curl -X GET \
    -G <span class="hljs-string">"https://app.azhasoft.com/connector/api/business-location"</span> \
    -H <span class="hljs-string">"Content-Type: application/json"</span> \
    -H <span class="hljs-string">"Accept: application/json"</span> \
    -H <span class="hljs-string">"Authorization: Bearer {token}"</span></code></pre>
<pre style="display: none;"><code class="language-javascript hljs"><span class="hljs-keyword">const</span> url = <span class="hljs-keyword">new</span> URL(
    <span class="hljs-string">"https://app.azhasoft.com/connector/api/business-location"</span>
);

<span class="hljs-keyword">let</span> headers = {
    <span class="hljs-string">"Content-Type"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Accept"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Authorization"</span>: <span class="hljs-string">"Bearer {token}"</span>,
};

fetch(url, {
    method: <span class="hljs-string">"GET"</span>,
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; <span class="hljs-built_in">console</span>.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json hljs">{
    "<span class="hljs-attr">data</span>": [
        {
            "<span class="hljs-attr">id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">location_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">name</span>": <span class="hljs-string">"Awesome Shop"</span>,
            "<span class="hljs-attr">landmark</span>": <span class="hljs-string">"Linking Street"</span>,
            "<span class="hljs-attr">country</span>": <span class="hljs-string">"USA"</span>,
            "<span class="hljs-attr">state</span>": <span class="hljs-string">"Arizona"</span>,
            "<span class="hljs-attr">city</span>": <span class="hljs-string">"Phoenix"</span>,
            "<span class="hljs-attr">zip_code</span>": <span class="hljs-string">"85001"</span>,
            "<span class="hljs-attr">invoice_scheme_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">invoice_layout_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">selling_price_group_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">print_receipt_on_invoice</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">receipt_printer_type</span>": <span class="hljs-string">"browser"</span>,
            "<span class="hljs-attr">printer_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">mobile</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">alternate_number</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">email</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">website</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">featured_products</span>": [
                <span class="hljs-string">"5"</span>,
                <span class="hljs-string">"71"</span>
            ],
            "<span class="hljs-attr">is_active</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">payment_methods</span>": [
                {
                    "<span class="hljs-attr">name</span>": <span class="hljs-string">"cash"</span>,
                    "<span class="hljs-attr">label</span>": <span class="hljs-string">"Cash"</span>,
                    "<span class="hljs-attr">account_id</span>": <span class="hljs-string">"1"</span>
                },
                {
                    "<span class="hljs-attr">name</span>": <span class="hljs-string">"card"</span>,
                    "<span class="hljs-attr">label</span>": <span class="hljs-string">"Card"</span>,
                    "<span class="hljs-attr">account_id</span>": <span class="hljs-literal">null</span>
                },
                {
                    "<span class="hljs-attr">name</span>": <span class="hljs-string">"cheque"</span>,
                    "<span class="hljs-attr">label</span>": <span class="hljs-string">"Cheque"</span>,
                    "<span class="hljs-attr">account_id</span>": <span class="hljs-literal">null</span>
                },
                {
                    "<span class="hljs-attr">name</span>": <span class="hljs-string">"bank_transfer"</span>,
                    "<span class="hljs-attr">label</span>": <span class="hljs-string">"Bank Transfer"</span>,
                    "<span class="hljs-attr">account_id</span>": <span class="hljs-literal">null</span>
                },
                {
                    "<span class="hljs-attr">name</span>": <span class="hljs-string">"other"</span>,
                    "<span class="hljs-attr">label</span>": <span class="hljs-string">"Other"</span>,
                    "<span class="hljs-attr">account_id</span>": <span class="hljs-literal">null</span>
                },
                {
                    "<span class="hljs-attr">name</span>": <span class="hljs-string">"custom_pay_1"</span>,
                    "<span class="hljs-attr">label</span>": <span class="hljs-string">"Custom Payment 1"</span>,
                    "<span class="hljs-attr">account_id</span>": <span class="hljs-literal">null</span>
                },
                {
                    "<span class="hljs-attr">name</span>": <span class="hljs-string">"custom_pay_2"</span>,
                    "<span class="hljs-attr">label</span>": <span class="hljs-string">"Custom Payment 2"</span>,
                    "<span class="hljs-attr">account_id</span>": <span class="hljs-literal">null</span>
                },
                {
                    "<span class="hljs-attr">name</span>": <span class="hljs-string">"custom_pay_3"</span>,
                    "<span class="hljs-attr">label</span>": <span class="hljs-string">"Custom Payment 3"</span>,
                    "<span class="hljs-attr">account_id</span>": <span class="hljs-literal">null</span>
                }
            ],
            "<span class="hljs-attr">custom_field1</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">custom_field2</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">custom_field3</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">custom_field4</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">deleted_at</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2018-01-04 02:15:20"</span>,
            "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2020-06-05 00:56:54"</span>
        }
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET connector/api/business-location</code></p>
<!-- END_c072951d4602fe0a03aff23281064400 -->
<!-- START_9104e27d4bc4c1062e9f47ae0f6c6b4e -->
<div name="get-the-specified-business-location" data-unique="get-the-specified-business-location"></div><h2 id="get-the-specified-business-location">Get the specified business location</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre style="display: block;"><code class="language-bash hljs">curl -X GET \
    -G <span class="hljs-string">"https://app.azhasoft.com/connector/api/business-location/1"</span> \
    -H <span class="hljs-string">"Content-Type: application/json"</span> \
    -H <span class="hljs-string">"Accept: application/json"</span> \
    -H <span class="hljs-string">"Authorization: Bearer {token}"</span></code></pre>
<pre style="display: none;"><code class="language-javascript hljs"><span class="hljs-keyword">const</span> url = <span class="hljs-keyword">new</span> URL(
    <span class="hljs-string">"https://app.azhasoft.com/connector/api/business-location/1"</span>
);

<span class="hljs-keyword">let</span> headers = {
    <span class="hljs-string">"Content-Type"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Accept"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Authorization"</span>: <span class="hljs-string">"Bearer {token}"</span>,
};

fetch(url, {
    method: <span class="hljs-string">"GET"</span>,
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; <span class="hljs-built_in">console</span>.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json hljs">{
    "<span class="hljs-attr">data</span>": [
        {
            "<span class="hljs-attr">id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">location_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">name</span>": <span class="hljs-string">"Awesome Shop"</span>,
            "<span class="hljs-attr">landmark</span>": <span class="hljs-string">"Linking Street"</span>,
            "<span class="hljs-attr">country</span>": <span class="hljs-string">"USA"</span>,
            "<span class="hljs-attr">state</span>": <span class="hljs-string">"Arizona"</span>,
            "<span class="hljs-attr">city</span>": <span class="hljs-string">"Phoenix"</span>,
            "<span class="hljs-attr">zip_code</span>": <span class="hljs-string">"85001"</span>,
            "<span class="hljs-attr">invoice_scheme_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">invoice_layout_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">selling_price_group_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">print_receipt_on_invoice</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">receipt_printer_type</span>": <span class="hljs-string">"browser"</span>,
            "<span class="hljs-attr">printer_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">mobile</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">alternate_number</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">email</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">website</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">featured_products</span>": [
                <span class="hljs-string">"5"</span>,
                <span class="hljs-string">"71"</span>
            ],
            "<span class="hljs-attr">is_active</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">payment_methods</span>": [
                {
                    "<span class="hljs-attr">name</span>": <span class="hljs-string">"cash"</span>,
                    "<span class="hljs-attr">label</span>": <span class="hljs-string">"Cash"</span>,
                    "<span class="hljs-attr">account_id</span>": <span class="hljs-string">"1"</span>
                },
                {
                    "<span class="hljs-attr">name</span>": <span class="hljs-string">"card"</span>,
                    "<span class="hljs-attr">label</span>": <span class="hljs-string">"Card"</span>,
                    "<span class="hljs-attr">account_id</span>": <span class="hljs-literal">null</span>
                },
                {
                    "<span class="hljs-attr">name</span>": <span class="hljs-string">"cheque"</span>,
                    "<span class="hljs-attr">label</span>": <span class="hljs-string">"Cheque"</span>,
                    "<span class="hljs-attr">account_id</span>": <span class="hljs-literal">null</span>
                },
                {
                    "<span class="hljs-attr">name</span>": <span class="hljs-string">"bank_transfer"</span>,
                    "<span class="hljs-attr">label</span>": <span class="hljs-string">"Bank Transfer"</span>,
                    "<span class="hljs-attr">account_id</span>": <span class="hljs-literal">null</span>
                },
                {
                    "<span class="hljs-attr">name</span>": <span class="hljs-string">"other"</span>,
                    "<span class="hljs-attr">label</span>": <span class="hljs-string">"Other"</span>,
                    "<span class="hljs-attr">account_id</span>": <span class="hljs-literal">null</span>
                },
                {
                    "<span class="hljs-attr">name</span>": <span class="hljs-string">"custom_pay_1"</span>,
                    "<span class="hljs-attr">label</span>": <span class="hljs-string">"Custom Payment 1"</span>,
                    "<span class="hljs-attr">account_id</span>": <span class="hljs-literal">null</span>
                },
                {
                    "<span class="hljs-attr">name</span>": <span class="hljs-string">"custom_pay_2"</span>,
                    "<span class="hljs-attr">label</span>": <span class="hljs-string">"Custom Payment 2"</span>,
                    "<span class="hljs-attr">account_id</span>": <span class="hljs-literal">null</span>
                },
                {
                    "<span class="hljs-attr">name</span>": <span class="hljs-string">"custom_pay_3"</span>,
                    "<span class="hljs-attr">label</span>": <span class="hljs-string">"Custom Payment 3"</span>,
                    "<span class="hljs-attr">account_id</span>": <span class="hljs-literal">null</span>
                }
            ],
            "<span class="hljs-attr">custom_field1</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">custom_field2</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">custom_field3</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">custom_field4</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">deleted_at</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2018-01-04 02:15:20"</span>,
            "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2020-06-05 00:56:54"</span>
        }
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET connector/api/business-location/{business_location}</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>location</code></td>
<td>required</td>
<td>comma separated ids of the business location</td>
</tr>
</tbody>
</table>
<!-- END_9104e27d4bc4c1062e9f47ae0f6c6b4e -->
<div name="cash-register-management" data-unique="cash-register-management"></div><h1 id="cash-register-management">Cash register management</h1>
<!-- START_a50604bed9adc4013802a310b95b65d4 -->
<div name="list-cash-registers" data-unique="list-cash-registers"></div><h2 id="list-cash-registers">List Cash Registers</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre style="display: block;"><code class="language-bash hljs">curl -X GET \
    -G <span class="hljs-string">"https://app.azhasoft.com/connector/api/cash-register?status=open&amp;user_id=10&amp;start_date=2018-06-25&amp;end_date=2018-06-25&amp;location_id=qui&amp;per_page=15"</span> \
    -H <span class="hljs-string">"Content-Type: application/json"</span> \
    -H <span class="hljs-string">"Accept: application/json"</span> \
    -H <span class="hljs-string">"Authorization: Bearer {token}"</span></code></pre>
<pre style="display: none;"><code class="language-javascript hljs"><span class="hljs-keyword">const</span> url = <span class="hljs-keyword">new</span> URL(
    <span class="hljs-string">"https://app.azhasoft.com/connector/api/cash-register"</span>
);

<span class="hljs-keyword">let</span> params = {
    <span class="hljs-string">"status"</span>: <span class="hljs-string">"open"</span>,
    <span class="hljs-string">"user_id"</span>: <span class="hljs-string">"10"</span>,
    <span class="hljs-string">"start_date"</span>: <span class="hljs-string">"2018-06-25"</span>,
    <span class="hljs-string">"end_date"</span>: <span class="hljs-string">"2018-06-25"</span>,
    <span class="hljs-string">"location_id"</span>: <span class="hljs-string">"qui"</span>,
    <span class="hljs-string">"per_page"</span>: <span class="hljs-string">"15"</span>,
};
<span class="hljs-built_in">Object</span>.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

<span class="hljs-keyword">let</span> headers = {
    <span class="hljs-string">"Content-Type"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Accept"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Authorization"</span>: <span class="hljs-string">"Bearer {token}"</span>,
};

fetch(url, {
    method: <span class="hljs-string">"GET"</span>,
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; <span class="hljs-built_in">console</span>.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json hljs">{
    "<span class="hljs-attr">data</span>": [
        {
            "<span class="hljs-attr">id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">location_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">user_id</span>": <span class="hljs-number">9</span>,
            "<span class="hljs-attr">status</span>": <span class="hljs-string">"open"</span>,
            "<span class="hljs-attr">closed_at</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">closing_amount</span>": <span class="hljs-string">"0.0000"</span>,
            "<span class="hljs-attr">total_card_slips</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">total_cheques</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">closing_note</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2020-07-02 12:03:00"</span>,
            "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2020-07-02 12:03:19"</span>,
            "<span class="hljs-attr">cash_register_transactions</span>": [
                {
                    "<span class="hljs-attr">id</span>": <span class="hljs-number">1</span>,
                    "<span class="hljs-attr">cash_register_id</span>": <span class="hljs-number">1</span>,
                    "<span class="hljs-attr">amount</span>": <span class="hljs-string">"0.0000"</span>,
                    "<span class="hljs-attr">pay_method</span>": <span class="hljs-string">"cash"</span>,
                    "<span class="hljs-attr">type</span>": <span class="hljs-string">"credit"</span>,
                    "<span class="hljs-attr">transaction_type</span>": <span class="hljs-string">"initial"</span>,
                    "<span class="hljs-attr">transaction_id</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2018-07-13 07:39:34"</span>,
                    "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2018-07-13 07:39:34"</span>
                },
                {
                    "<span class="hljs-attr">id</span>": <span class="hljs-number">2</span>,
                    "<span class="hljs-attr">cash_register_id</span>": <span class="hljs-number">1</span>,
                    "<span class="hljs-attr">amount</span>": <span class="hljs-string">"42.5000"</span>,
                    "<span class="hljs-attr">pay_method</span>": <span class="hljs-string">"cash"</span>,
                    "<span class="hljs-attr">type</span>": <span class="hljs-string">"credit"</span>,
                    "<span class="hljs-attr">transaction_type</span>": <span class="hljs-string">"sell"</span>,
                    "<span class="hljs-attr">transaction_id</span>": <span class="hljs-number">41</span>,
                    "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2018-07-13 07:44:40"</span>,
                    "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2018-07-13 07:44:40"</span>
                }
            ]
        },
        {
            "<span class="hljs-attr">id</span>": <span class="hljs-number">2</span>,
            "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">location_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">user_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">status</span>": <span class="hljs-string">""</span>,
            "<span class="hljs-attr">closed_at</span>": <span class="hljs-string">"2020-07-02 12:03:00"</span>,
            "<span class="hljs-attr">closing_amount</span>": <span class="hljs-string">"0.0000"</span>,
            "<span class="hljs-attr">total_card_slips</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">total_cheques</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">closing_note</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2020-07-06 15:38:23"</span>,
            "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2020-07-06 15:38:23"</span>,
            "<span class="hljs-attr">cash_register_transactions</span>": [
                {
                    "<span class="hljs-attr">id</span>": <span class="hljs-number">19</span>,
                    "<span class="hljs-attr">cash_register_id</span>": <span class="hljs-number">2</span>,
                    "<span class="hljs-attr">amount</span>": <span class="hljs-string">"10.0000"</span>,
                    "<span class="hljs-attr">pay_method</span>": <span class="hljs-string">"cash"</span>,
                    "<span class="hljs-attr">type</span>": <span class="hljs-string">"credit"</span>,
                    "<span class="hljs-attr">transaction_type</span>": <span class="hljs-string">"initial"</span>,
                    "<span class="hljs-attr">transaction_id</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2020-07-06 15:38:23"</span>,
                    "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2020-07-06 15:38:23"</span>
                }
            ]
        }
    ],
    "<span class="hljs-attr">links</span>": {
        "<span class="hljs-attr">first</span>": <span class="hljs-string">"http:\/\/local.pos.com\/connector\/api\/cash-register?page=1"</span>,
        "<span class="hljs-attr">last</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">prev</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">next</span>": <span class="hljs-literal">null</span>
    },
    "<span class="hljs-attr">meta</span>": {
        "<span class="hljs-attr">current_page</span>": <span class="hljs-number">1</span>,
        "<span class="hljs-attr">from</span>": <span class="hljs-number">1</span>,
        "<span class="hljs-attr">path</span>": <span class="hljs-string">"http:\/\/local.pos.com\/connector\/api\/cash-register"</span>,
        "<span class="hljs-attr">per_page</span>": <span class="hljs-number">10</span>,
        "<span class="hljs-attr">to</span>": <span class="hljs-number">2</span>
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET connector/api/cash-register</code></p>
<h4>Query Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>status</code></td>
<td>optional</td>
<td>status of the register (open, close)</td>
</tr>
<tr>
<td><code>user_id</code></td>
<td>optional</td>
<td>id of the user</td>
</tr>
<tr>
<td><code>start_date</code></td>
<td>optional</td>
<td>format:Y-m-d</td>
</tr>
<tr>
<td><code>end_date</code></td>
<td>optional</td>
<td>format:Y-m-d</td>
</tr>
<tr>
<td><code>location_id</code></td>
<td>optional</td>
<td>id of the location</td>
</tr>
<tr>
<td><code>per_page</code></td>
<td>optional</td>
<td>Total records per page. default: 10, Set -1 for no pagination</td>
</tr>
</tbody>
</table>
<!-- END_a50604bed9adc4013802a310b95b65d4 -->
<!-- START_8f89eda7862467cd40d78804ce26224f -->
<div name="create-cash-register" data-unique="create-cash-register"></div><h2 id="create-cash-register">Create Cash Register</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre style="display: block;"><code class="language-bash hljs">curl -X POST \
    <span class="hljs-string">"https://app.azhasoft.com/connector/api/cash-register"</span> \
    -H <span class="hljs-string">"Content-Type: application/json"</span> \
    -H <span class="hljs-string">"Accept: application/json"</span> \
    -H <span class="hljs-string">"Authorization: Bearer {token}"</span> \
    <span class="hljs-_">-d</span> <span class="hljs-string">'{"location_id":19,"initial_amount":147905884.875259,"created_at":"2020-5-7 15:20:22","closed_at":"2020-5-7 15:20:22","status":"close","closing_amount":0,"total_card_slips":5,"total_cheques":5,"closing_note":"voluptas","transaction_ids":"1,2,3"}'</span>
</code></pre>
<pre style="display: none;"><code class="language-javascript hljs"><span class="hljs-keyword">const</span> url = <span class="hljs-keyword">new</span> URL(
    <span class="hljs-string">"https://app.azhasoft.com/connector/api/cash-register"</span>
);

<span class="hljs-keyword">let</span> headers = {
    <span class="hljs-string">"Content-Type"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Accept"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Authorization"</span>: <span class="hljs-string">"Bearer {token}"</span>,
};

<span class="hljs-keyword">let</span> body = {
    <span class="hljs-string">"location_id"</span>: <span class="hljs-number">19</span>,
    <span class="hljs-string">"initial_amount"</span>: <span class="hljs-number">147905884.875259</span>,
    <span class="hljs-string">"created_at"</span>: <span class="hljs-string">"2020-5-7 15:20:22"</span>,
    <span class="hljs-string">"closed_at"</span>: <span class="hljs-string">"2020-5-7 15:20:22"</span>,
    <span class="hljs-string">"status"</span>: <span class="hljs-string">"close"</span>,
    <span class="hljs-string">"closing_amount"</span>: <span class="hljs-number">0</span>,
    <span class="hljs-string">"total_card_slips"</span>: <span class="hljs-number">5</span>,
    <span class="hljs-string">"total_cheques"</span>: <span class="hljs-number">5</span>,
    <span class="hljs-string">"closing_note"</span>: <span class="hljs-string">"voluptas"</span>,
    <span class="hljs-string">"transaction_ids"</span>: <span class="hljs-string">"1,2,3"</span>
}

fetch(url, {
    method: <span class="hljs-string">"POST"</span>,
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; <span class="hljs-built_in">console</span>.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST connector/api/cash-register</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>location_id</code></td>
<td>integer</td>
<td>required</td>
<td>id of the business location</td>
</tr>
<tr>
<td><code>initial_amount</code></td>
<td>float</td>
<td>optional</td>
<td>Initial amount</td>
</tr>
<tr>
<td><code>created_at</code></td>
<td>string</td>
<td>optional</td>
<td>Register open datetime format:Y-m-d H:i:s,</td>
</tr>
<tr>
<td><code>closed_at</code></td>
<td>string</td>
<td>optional</td>
<td>Register closed datetime format:Y-m-d H:i:s,</td>
</tr>
<tr>
<td><code>status</code></td>
<td>register</td>
<td>optional</td>
<td>status (open, close)</td>
</tr>
<tr>
<td><code>closing_amount</code></td>
<td>float</td>
<td>optional</td>
<td>Closing amount</td>
</tr>
<tr>
<td><code>total_card_slips</code></td>
<td>integer</td>
<td>optional</td>
<td>total number of card slips</td>
</tr>
<tr>
<td><code>total_cheques</code></td>
<td>integer</td>
<td>optional</td>
<td>total number of checks</td>
</tr>
<tr>
<td><code>closing_note</code></td>
<td>string</td>
<td>optional</td>
<td>Closing note</td>
</tr>
<tr>
<td><code>transaction_ids</code></td>
<td>string</td>
<td>optional</td>
<td>Comma separated ids of sells associated with the register</td>
</tr>
</tbody>
</table>
<!-- END_8f89eda7862467cd40d78804ce26224f -->
<!-- START_a2687684d95719fe11a4febbba5369ba -->
<div name="get-the-specified-register" data-unique="get-the-specified-register"></div><h2 id="get-the-specified-register">Get the specified Register</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre style="display: block;"><code class="language-bash hljs">curl -X GET \
    -G <span class="hljs-string">"https://app.azhasoft.com/connector/api/cash-register/59"</span> \
    -H <span class="hljs-string">"Content-Type: application/json"</span> \
    -H <span class="hljs-string">"Accept: application/json"</span> \
    -H <span class="hljs-string">"Authorization: Bearer {token}"</span></code></pre>
<pre style="display: none;"><code class="language-javascript hljs"><span class="hljs-keyword">const</span> url = <span class="hljs-keyword">new</span> URL(
    <span class="hljs-string">"https://app.azhasoft.com/connector/api/cash-register/59"</span>
);

<span class="hljs-keyword">let</span> headers = {
    <span class="hljs-string">"Content-Type"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Accept"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Authorization"</span>: <span class="hljs-string">"Bearer {token}"</span>,
};

fetch(url, {
    method: <span class="hljs-string">"GET"</span>,
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; <span class="hljs-built_in">console</span>.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json hljs">{
    "<span class="hljs-attr">data</span>": [
        {
            "<span class="hljs-attr">id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">location_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">user_id</span>": <span class="hljs-number">9</span>,
            "<span class="hljs-attr">status</span>": <span class="hljs-string">"open"</span>,
            "<span class="hljs-attr">closed_at</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">closing_amount</span>": <span class="hljs-string">"0.0000"</span>,
            "<span class="hljs-attr">total_card_slips</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">total_cheques</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">closing_note</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2020-07-02 12:03:00"</span>,
            "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2020-07-02 12:03:19"</span>,
            "<span class="hljs-attr">cash_register_transactions</span>": [
                {
                    "<span class="hljs-attr">id</span>": <span class="hljs-number">1</span>,
                    "<span class="hljs-attr">cash_register_id</span>": <span class="hljs-number">1</span>,
                    "<span class="hljs-attr">amount</span>": <span class="hljs-string">"0.0000"</span>,
                    "<span class="hljs-attr">pay_method</span>": <span class="hljs-string">"cash"</span>,
                    "<span class="hljs-attr">type</span>": <span class="hljs-string">"credit"</span>,
                    "<span class="hljs-attr">transaction_type</span>": <span class="hljs-string">"initial"</span>,
                    "<span class="hljs-attr">transaction_id</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2018-07-13 07:39:34"</span>,
                    "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2018-07-13 07:39:34"</span>
                },
                {
                    "<span class="hljs-attr">id</span>": <span class="hljs-number">2</span>,
                    "<span class="hljs-attr">cash_register_id</span>": <span class="hljs-number">1</span>,
                    "<span class="hljs-attr">amount</span>": <span class="hljs-string">"42.5000"</span>,
                    "<span class="hljs-attr">pay_method</span>": <span class="hljs-string">"cash"</span>,
                    "<span class="hljs-attr">type</span>": <span class="hljs-string">"credit"</span>,
                    "<span class="hljs-attr">transaction_type</span>": <span class="hljs-string">"sell"</span>,
                    "<span class="hljs-attr">transaction_id</span>": <span class="hljs-number">41</span>,
                    "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2018-07-13 07:44:40"</span>,
                    "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2018-07-13 07:44:40"</span>
                }
            ]
        }
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET connector/api/cash-register/{cash_register}</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>cash_register</code></td>
<td>required</td>
<td>comma separated ids of the cash registers</td>
</tr>
</tbody>
</table>
<!-- END_a2687684d95719fe11a4febbba5369ba -->
<div name="contact-management" data-unique="contact-management"></div><h1 id="contact-management">Contact management</h1>
<!-- START_07c0ddff380ea6d14e20347286efae96 -->
<div name="list-contact" data-unique="list-contact"></div><h2 id="list-contact">List contact</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre style="display: block;"><code class="language-bash hljs">curl -X GET \
    -G <span class="hljs-string">"https://app.azhasoft.com/connector/api/contactapi?type=natus"</span> \
    -H <span class="hljs-string">"Content-Type: application/json"</span> \
    -H <span class="hljs-string">"Accept: application/json"</span> \
    -H <span class="hljs-string">"Authorization: Bearer {token}"</span></code></pre>
<pre style="display: none;"><code class="language-javascript hljs"><span class="hljs-keyword">const</span> url = <span class="hljs-keyword">new</span> URL(
    <span class="hljs-string">"https://app.azhasoft.com/connector/api/contactapi"</span>
);

<span class="hljs-keyword">let</span> params = {
    <span class="hljs-string">"type"</span>: <span class="hljs-string">"natus"</span>,
};
<span class="hljs-built_in">Object</span>.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

<span class="hljs-keyword">let</span> headers = {
    <span class="hljs-string">"Content-Type"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Accept"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Authorization"</span>: <span class="hljs-string">"Bearer {token}"</span>,
};

fetch(url, {
    method: <span class="hljs-string">"GET"</span>,
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; <span class="hljs-built_in">console</span>.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json hljs">{
    "<span class="hljs-attr">data</span>": [
        {
            "<span class="hljs-attr">id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">type</span>": <span class="hljs-string">"customer"</span>,
            "<span class="hljs-attr">supplier_business_name</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">name</span>": <span class="hljs-string">" Walk-In Customer  "</span>,
            "<span class="hljs-attr">prefix</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">first_name</span>": <span class="hljs-string">"Walk-In Customer"</span>,
            "<span class="hljs-attr">middle_name</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">last_name</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">email</span>": <span class="hljs-string">"walkin@test.com"</span>,
            "<span class="hljs-attr">contact_id</span>": <span class="hljs-string">"CO0005"</span>,
            "<span class="hljs-attr">contact_status</span>": <span class="hljs-string">"active"</span>,
            "<span class="hljs-attr">tax_number</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">city</span>": <span class="hljs-string">"Phoenix"</span>,
            "<span class="hljs-attr">state</span>": <span class="hljs-string">"Arizona"</span>,
            "<span class="hljs-attr">country</span>": <span class="hljs-string">"USA"</span>,
            "<span class="hljs-attr">address_line_1</span>": <span class="hljs-string">"Linking Street"</span>,
            "<span class="hljs-attr">address_line_2</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">zip_code</span>": <span class="hljs-string">"85001"</span>,
            "<span class="hljs-attr">dob</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">mobile</span>": <span class="hljs-string">"(378) 400-1234"</span>,
            "<span class="hljs-attr">landline</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">alternate_number</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">pay_term_number</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">pay_term_type</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">credit_limit</span>": <span class="hljs-string">"0.0000"</span>,
            "<span class="hljs-attr">created_by</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">balance</span>": <span class="hljs-string">"0.0000"</span>,
            "<span class="hljs-attr">total_rp</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">total_rp_used</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">total_rp_expired</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">is_default</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">shipping_address</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">position</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">customer_group_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">crm_source</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">crm_life_stage</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">custom_field1</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">custom_field2</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">custom_field3</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">custom_field4</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">deleted_at</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2018-01-03 20:45:20"</span>,
            "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2020-08-10 10:26:45"</span>,
            "<span class="hljs-attr">remember_token</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">password</span>": <span class="hljs-literal">null</span>
        },
        {
            "<span class="hljs-attr">id</span>": <span class="hljs-number">2</span>,
            "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">type</span>": <span class="hljs-string">"supplier"</span>,
            "<span class="hljs-attr">supplier_business_name</span>": <span class="hljs-string">"Alpha Clothings"</span>,
            "<span class="hljs-attr">name</span>": <span class="hljs-string">"Michael"</span>,
            "<span class="hljs-attr">prefix</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">first_name</span>": <span class="hljs-string">"Michael"</span>,
            "<span class="hljs-attr">middle_name</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">last_name</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">email</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">contact_id</span>": <span class="hljs-string">"CO0001"</span>,
            "<span class="hljs-attr">contact_status</span>": <span class="hljs-string">"active"</span>,
            "<span class="hljs-attr">tax_number</span>": <span class="hljs-string">"4590091535"</span>,
            "<span class="hljs-attr">city</span>": <span class="hljs-string">"Phoenix"</span>,
            "<span class="hljs-attr">state</span>": <span class="hljs-string">"Arizona"</span>,
            "<span class="hljs-attr">country</span>": <span class="hljs-string">"USA"</span>,
            "<span class="hljs-attr">address_line_1</span>": <span class="hljs-string">"Linking Street"</span>,
            "<span class="hljs-attr">address_line_2</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">zip_code</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">dob</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">mobile</span>": <span class="hljs-string">"(378) 400-1234"</span>,
            "<span class="hljs-attr">landline</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">alternate_number</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">pay_term_number</span>": <span class="hljs-number">15</span>,
            "<span class="hljs-attr">pay_term_type</span>": <span class="hljs-string">"days"</span>,
            "<span class="hljs-attr">credit_limit</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">created_by</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">balance</span>": <span class="hljs-string">"0.0000"</span>,
            "<span class="hljs-attr">total_rp</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">total_rp_used</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">total_rp_expired</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">is_default</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">shipping_address</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">position</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">customer_group_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">crm_source</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">crm_life_stage</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">custom_field1</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">custom_field2</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">custom_field3</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">custom_field4</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">deleted_at</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2018-01-03 20:59:38"</span>,
            "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2018-06-11 22:21:03"</span>,
            "<span class="hljs-attr">remember_token</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">password</span>": <span class="hljs-literal">null</span>
        }
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET connector/api/contactapi</code></p>
<h4>Query Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>type</code></td>
<td>required</td>
<td>Type of contact (supplier, customer, lead)</td>
</tr>
</tbody>
</table>
<!-- END_07c0ddff380ea6d14e20347286efae96 -->
<!-- START_f29a42b1a8a0ab58c748a1e2fcdfffff -->
<div name="create-contact" data-unique="create-contact"></div><h2 id="create-contact">Create contact</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre style="display: block;"><code class="language-bash hljs">curl -X POST \
    <span class="hljs-string">"https://app.azhasoft.com/connector/api/contactapi"</span> \
    -H <span class="hljs-string">"Content-Type: application/json"</span> \
    -H <span class="hljs-string">"Accept: application/json"</span> \
    -H <span class="hljs-string">"Authorization: Bearer {token}"</span> \
    <span class="hljs-_">-d</span> <span class="hljs-string">'{"type":"customer","supplier_business_name":"est","prefix":"odio","first_name":"occaecati","middle_name":"ut","last_name":"quo","tax_number":"8787fefef","pay_term_number":3,"pay_term_type":"months","mobile":"4578691009","landline":"5487-8454-4145","alternate_number":"841847541222","address_line_1":"distinctio","address_line_2":"corrupti","city":"est","state":"blanditiis","country":"atque","zip_code":"occaecati","customer_group_id":"fuga","contact_id":"reprehenderit","dob":"2000-06-13","custom_field1":"doloremque","custom_field2":"rerum","custom_field3":"dolorum","custom_field4":"sint","email":"quibusdam","shipping_address":"enim","position":"et","opening_balance":0,"source_id":10,"life_stage_id":19,"assigned_to":[]}'</span>
</code></pre>
<pre style="display: none;"><code class="language-javascript hljs"><span class="hljs-keyword">const</span> url = <span class="hljs-keyword">new</span> URL(
    <span class="hljs-string">"https://app.azhasoft.com/connector/api/contactapi"</span>
);

<span class="hljs-keyword">let</span> headers = {
    <span class="hljs-string">"Content-Type"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Accept"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Authorization"</span>: <span class="hljs-string">"Bearer {token}"</span>,
};

<span class="hljs-keyword">let</span> body = {
    <span class="hljs-string">"type"</span>: <span class="hljs-string">"customer"</span>,
    <span class="hljs-string">"supplier_business_name"</span>: <span class="hljs-string">"est"</span>,
    <span class="hljs-string">"prefix"</span>: <span class="hljs-string">"odio"</span>,
    <span class="hljs-string">"first_name"</span>: <span class="hljs-string">"occaecati"</span>,
    <span class="hljs-string">"middle_name"</span>: <span class="hljs-string">"ut"</span>,
    <span class="hljs-string">"last_name"</span>: <span class="hljs-string">"quo"</span>,
    <span class="hljs-string">"tax_number"</span>: <span class="hljs-string">"8787fefef"</span>,
    <span class="hljs-string">"pay_term_number"</span>: <span class="hljs-number">3</span>,
    <span class="hljs-string">"pay_term_type"</span>: <span class="hljs-string">"months"</span>,
    <span class="hljs-string">"mobile"</span>: <span class="hljs-string">"4578691009"</span>,
    <span class="hljs-string">"landline"</span>: <span class="hljs-string">"5487-8454-4145"</span>,
    <span class="hljs-string">"alternate_number"</span>: <span class="hljs-string">"841847541222"</span>,
    <span class="hljs-string">"address_line_1"</span>: <span class="hljs-string">"distinctio"</span>,
    <span class="hljs-string">"address_line_2"</span>: <span class="hljs-string">"corrupti"</span>,
    <span class="hljs-string">"city"</span>: <span class="hljs-string">"est"</span>,
    <span class="hljs-string">"state"</span>: <span class="hljs-string">"blanditiis"</span>,
    <span class="hljs-string">"country"</span>: <span class="hljs-string">"atque"</span>,
    <span class="hljs-string">"zip_code"</span>: <span class="hljs-string">"occaecati"</span>,
    <span class="hljs-string">"customer_group_id"</span>: <span class="hljs-string">"fuga"</span>,
    <span class="hljs-string">"contact_id"</span>: <span class="hljs-string">"reprehenderit"</span>,
    <span class="hljs-string">"dob"</span>: <span class="hljs-string">"2000-06-13"</span>,
    <span class="hljs-string">"custom_field1"</span>: <span class="hljs-string">"doloremque"</span>,
    <span class="hljs-string">"custom_field2"</span>: <span class="hljs-string">"rerum"</span>,
    <span class="hljs-string">"custom_field3"</span>: <span class="hljs-string">"dolorum"</span>,
    <span class="hljs-string">"custom_field4"</span>: <span class="hljs-string">"sint"</span>,
    <span class="hljs-string">"email"</span>: <span class="hljs-string">"quibusdam"</span>,
    <span class="hljs-string">"shipping_address"</span>: <span class="hljs-string">"enim"</span>,
    <span class="hljs-string">"position"</span>: <span class="hljs-string">"et"</span>,
    <span class="hljs-string">"opening_balance"</span>: <span class="hljs-number">0</span>,
    <span class="hljs-string">"source_id"</span>: <span class="hljs-number">10</span>,
    <span class="hljs-string">"life_stage_id"</span>: <span class="hljs-number">19</span>,
    <span class="hljs-string">"assigned_to"</span>: []
}

fetch(url, {
    method: <span class="hljs-string">"POST"</span>,
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; <span class="hljs-built_in">console</span>.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json hljs">{
    "<span class="hljs-attr">data</span>": {
        "<span class="hljs-attr">type</span>": <span class="hljs-string">"customer"</span>,
        "<span class="hljs-attr">name</span>": <span class="hljs-string">"test customer"</span>,
        "<span class="hljs-attr">tax_number</span>": <span class="hljs-string">"75879BHF"</span>,
        "<span class="hljs-attr">mobile</span>": <span class="hljs-string">"7878825008"</span>,
        "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
        "<span class="hljs-attr">created_by</span>": <span class="hljs-number">9</span>,
        "<span class="hljs-attr">credit_limit</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">contact_id</span>": <span class="hljs-string">"CO0007"</span>,
        "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2020-06-04 21:59:21"</span>,
        "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2020-06-04 21:59:21"</span>,
        "<span class="hljs-attr">id</span>": <span class="hljs-number">17</span>
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST connector/api/contactapi</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>type</code></td>
<td>string</td>
<td>required</td>
<td>Type of contact (supplier, customer, both, lead)</td>
</tr>
<tr>
<td><code>supplier_business_name</code></td>
<td>string</td>
<td>required</td>
<td>Required if type is supplier</td>
</tr>
<tr>
<td><code>prefix</code></td>
<td>string</td>
<td>optional</td>
<td>Prefix for the name of the contact</td>
</tr>
<tr>
<td><code>first_name</code></td>
<td>string</td>
<td>required</td>
<td>Name of the contact</td>
</tr>
<tr>
<td><code>middle_name</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>last_name</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>tax_number</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>pay_term_number</code></td>
<td>float</td>
<td>optional</td>
</tr>
<tr>
<td><code>pay_term_type</code></td>
<td>string</td>
<td>optional</td>
<td>(months ,days)</td>
</tr>
<tr>
<td><code>mobile</code></td>
<td>string</td>
<td>required</td>
</tr>
<tr>
<td><code>landline</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>alternate_number</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>address_line_1</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>address_line_2</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>city</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>state</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>country</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>zip_code</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>customer_group_id</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>contact_id</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>dob</code></td>
<td>string</td>
<td>optional</td>
<td>Fromat: Y-m-d</td>
</tr>
<tr>
<td><code>custom_field1</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>custom_field2</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>custom_field3</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>custom_field4</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>email</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>shipping_address</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>position</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>opening_balance</code></td>
<td>float</td>
<td>optional</td>
</tr>
<tr>
<td><code>source_id</code></td>
<td>integer</td>
<td>optional</td>
<td>Id of the source. Applicable only if the type is lead</td>
</tr>
<tr>
<td><code>life_stage_id</code></td>
<td>integer</td>
<td>optional</td>
<td>Id of the Life stage. Applicable only if the type is lead</td>
</tr>
<tr>
<td><code>assigned_to</code></td>
<td>array</td>
<td>optional</td>
<td>Ids of the users the lead is assigned to. Applicable only if the type is lead</td>
</tr>
</tbody>
</table>
<!-- END_f29a42b1a8a0ab58c748a1e2fcdfffff -->
<!-- START_881831b2bf43ea3a46b0f31984cdcfd4 -->
<div name="get-the-specified-contact" data-unique="get-the-specified-contact"></div><h2 id="get-the-specified-contact">Get the specified contact</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre style="display: block;"><code class="language-bash hljs">curl -X GET \
    -G <span class="hljs-string">"https://app.azhasoft.com/connector/api/contactapi/1"</span> \
    -H <span class="hljs-string">"Content-Type: application/json"</span> \
    -H <span class="hljs-string">"Accept: application/json"</span> \
    -H <span class="hljs-string">"Authorization: Bearer {token}"</span></code></pre>
<pre style="display: none;"><code class="language-javascript hljs"><span class="hljs-keyword">const</span> url = <span class="hljs-keyword">new</span> URL(
    <span class="hljs-string">"https://app.azhasoft.com/connector/api/contactapi/1"</span>
);

<span class="hljs-keyword">let</span> headers = {
    <span class="hljs-string">"Content-Type"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Accept"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Authorization"</span>: <span class="hljs-string">"Bearer {token}"</span>,
};

fetch(url, {
    method: <span class="hljs-string">"GET"</span>,
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; <span class="hljs-built_in">console</span>.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json hljs">{
    "<span class="hljs-attr">data</span>": [
        {
            "<span class="hljs-attr">id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">type</span>": <span class="hljs-string">"customer"</span>,
            "<span class="hljs-attr">supplier_business_name</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">name</span>": <span class="hljs-string">" Walk-In Customer  "</span>,
            "<span class="hljs-attr">prefix</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">first_name</span>": <span class="hljs-string">"Walk-In Customer"</span>,
            "<span class="hljs-attr">middle_name</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">last_name</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">email</span>": <span class="hljs-string">"walkin@test.com"</span>,
            "<span class="hljs-attr">contact_id</span>": <span class="hljs-string">"CO0005"</span>,
            "<span class="hljs-attr">contact_status</span>": <span class="hljs-string">"active"</span>,
            "<span class="hljs-attr">tax_number</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">city</span>": <span class="hljs-string">"Phoenix"</span>,
            "<span class="hljs-attr">state</span>": <span class="hljs-string">"Arizona"</span>,
            "<span class="hljs-attr">country</span>": <span class="hljs-string">"USA"</span>,
            "<span class="hljs-attr">address_line_1</span>": <span class="hljs-string">"Linking Street"</span>,
            "<span class="hljs-attr">address_line_2</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">zip_code</span>": <span class="hljs-string">"85001"</span>,
            "<span class="hljs-attr">dob</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">mobile</span>": <span class="hljs-string">"(378) 400-1234"</span>,
            "<span class="hljs-attr">landline</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">alternate_number</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">pay_term_number</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">pay_term_type</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">credit_limit</span>": <span class="hljs-string">"0.0000"</span>,
            "<span class="hljs-attr">created_by</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">balance</span>": <span class="hljs-string">"0.0000"</span>,
            "<span class="hljs-attr">total_rp</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">total_rp_used</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">total_rp_expired</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">is_default</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">shipping_address</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">position</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">customer_group_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">crm_source</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">crm_life_stage</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">custom_field1</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">custom_field2</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">custom_field3</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">custom_field4</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">deleted_at</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2018-01-03 20:45:20"</span>,
            "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2020-08-10 10:26:45"</span>,
            "<span class="hljs-attr">remember_token</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">password</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">customer_group</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">opening_balance</span>": <span class="hljs-string">"0.0000"</span>,
            "<span class="hljs-attr">opening_balance_paid</span>": <span class="hljs-string">"0.0000"</span>,
            "<span class="hljs-attr">total_purchase</span>": <span class="hljs-string">"0.0000"</span>,
            "<span class="hljs-attr">purchase_paid</span>": <span class="hljs-string">"0.0000"</span>,
            "<span class="hljs-attr">total_purchase_return</span>": <span class="hljs-string">"0.0000"</span>,
            "<span class="hljs-attr">purchase_return_paid</span>": <span class="hljs-string">"0.0000"</span>,
            "<span class="hljs-attr">total_invoice</span>": <span class="hljs-string">"2050.0000"</span>,
            "<span class="hljs-attr">invoice_received</span>": <span class="hljs-string">"1987.5000"</span>,
            "<span class="hljs-attr">total_sell_return</span>": <span class="hljs-string">"0.0000"</span>,
            "<span class="hljs-attr">sell_return_paid</span>": <span class="hljs-string">"0.0000"</span>,
            "<span class="hljs-attr">purchase_due</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">sell_due</span>": <span class="hljs-number">62.5</span>,
            "<span class="hljs-attr">purchase_return_due</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">sell_return_due</span>": <span class="hljs-number">0</span>
        }
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET connector/api/contactapi/{contactapi}</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>contact</code></td>
<td>required</td>
<td>comma separated ids of contacts</td>
</tr>
</tbody>
</table>
<!-- END_881831b2bf43ea3a46b0f31984cdcfd4 -->
<!-- START_0864439d4f7d266432221198feef851d -->
<div name="update-contact" data-unique="update-contact"></div><h2 id="update-contact">Update contact</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre style="display: block;"><code class="language-bash hljs">curl -X PUT \
    <span class="hljs-string">"https://app.azhasoft.com/connector/api/contactapi/1"</span> \
    -H <span class="hljs-string">"Content-Type: application/json"</span> \
    -H <span class="hljs-string">"Accept: application/json"</span> \
    -H <span class="hljs-string">"Authorization: Bearer {token}"</span> \
    <span class="hljs-_">-d</span> <span class="hljs-string">'{"type":"customer","supplier_business_name":"distinctio","prefix":"perspiciatis","first_name":"voluptatibus","middle_name":"dignissimos","last_name":"hic","tax_number":"488744dwd","pay_term_number":3,"pay_term_type":"months","mobile":"8795461009","landline":"65484-848-848","alternate_number":"9898795220","address_line_1":"velit","address_line_2":"similique","city":"aut","state":"libero","country":"reiciendis","zip_code":"soluta","customer_group_id":"iure","contact_id":"sed","dob":"2000-06-13","custom_field1":"veritatis","custom_field2":"dolorem","custom_field3":"occaecati","custom_field4":"commodi","email":"unde","shipping_address":"fugiat","position":"voluptas","opening_balance":10.3,"source_id":12,"life_stage_id":2,"assigned_to":[]}'</span>
</code></pre>
<pre style="display: none;"><code class="language-javascript hljs"><span class="hljs-keyword">const</span> url = <span class="hljs-keyword">new</span> URL(
    <span class="hljs-string">"https://app.azhasoft.com/connector/api/contactapi/1"</span>
);

<span class="hljs-keyword">let</span> headers = {
    <span class="hljs-string">"Content-Type"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Accept"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Authorization"</span>: <span class="hljs-string">"Bearer {token}"</span>,
};

<span class="hljs-keyword">let</span> body = {
    <span class="hljs-string">"type"</span>: <span class="hljs-string">"customer"</span>,
    <span class="hljs-string">"supplier_business_name"</span>: <span class="hljs-string">"distinctio"</span>,
    <span class="hljs-string">"prefix"</span>: <span class="hljs-string">"perspiciatis"</span>,
    <span class="hljs-string">"first_name"</span>: <span class="hljs-string">"voluptatibus"</span>,
    <span class="hljs-string">"middle_name"</span>: <span class="hljs-string">"dignissimos"</span>,
    <span class="hljs-string">"last_name"</span>: <span class="hljs-string">"hic"</span>,
    <span class="hljs-string">"tax_number"</span>: <span class="hljs-string">"488744dwd"</span>,
    <span class="hljs-string">"pay_term_number"</span>: <span class="hljs-number">3</span>,
    <span class="hljs-string">"pay_term_type"</span>: <span class="hljs-string">"months"</span>,
    <span class="hljs-string">"mobile"</span>: <span class="hljs-string">"8795461009"</span>,
    <span class="hljs-string">"landline"</span>: <span class="hljs-string">"65484-848-848"</span>,
    <span class="hljs-string">"alternate_number"</span>: <span class="hljs-string">"9898795220"</span>,
    <span class="hljs-string">"address_line_1"</span>: <span class="hljs-string">"velit"</span>,
    <span class="hljs-string">"address_line_2"</span>: <span class="hljs-string">"similique"</span>,
    <span class="hljs-string">"city"</span>: <span class="hljs-string">"aut"</span>,
    <span class="hljs-string">"state"</span>: <span class="hljs-string">"libero"</span>,
    <span class="hljs-string">"country"</span>: <span class="hljs-string">"reiciendis"</span>,
    <span class="hljs-string">"zip_code"</span>: <span class="hljs-string">"soluta"</span>,
    <span class="hljs-string">"customer_group_id"</span>: <span class="hljs-string">"iure"</span>,
    <span class="hljs-string">"contact_id"</span>: <span class="hljs-string">"sed"</span>,
    <span class="hljs-string">"dob"</span>: <span class="hljs-string">"2000-06-13"</span>,
    <span class="hljs-string">"custom_field1"</span>: <span class="hljs-string">"veritatis"</span>,
    <span class="hljs-string">"custom_field2"</span>: <span class="hljs-string">"dolorem"</span>,
    <span class="hljs-string">"custom_field3"</span>: <span class="hljs-string">"occaecati"</span>,
    <span class="hljs-string">"custom_field4"</span>: <span class="hljs-string">"commodi"</span>,
    <span class="hljs-string">"email"</span>: <span class="hljs-string">"unde"</span>,
    <span class="hljs-string">"shipping_address"</span>: <span class="hljs-string">"fugiat"</span>,
    <span class="hljs-string">"position"</span>: <span class="hljs-string">"voluptas"</span>,
    <span class="hljs-string">"opening_balance"</span>: <span class="hljs-number">10.3</span>,
    <span class="hljs-string">"source_id"</span>: <span class="hljs-number">12</span>,
    <span class="hljs-string">"life_stage_id"</span>: <span class="hljs-number">2</span>,
    <span class="hljs-string">"assigned_to"</span>: []
}

fetch(url, {
    method: <span class="hljs-string">"PUT"</span>,
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; <span class="hljs-built_in">console</span>.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json hljs">{
    "<span class="hljs-attr">data</span>": {
        "<span class="hljs-attr">id</span>": <span class="hljs-number">21</span>,
        "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
        "<span class="hljs-attr">type</span>": <span class="hljs-string">"customer"</span>,
        "<span class="hljs-attr">supplier_business_name</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">name</span>": <span class="hljs-string">"created from api"</span>,
        "<span class="hljs-attr">prefix</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">first_name</span>": <span class="hljs-string">"created from api"</span>,
        "<span class="hljs-attr">middle_name</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">last_name</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">email</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">contact_id</span>": <span class="hljs-string">"CO0009"</span>,
        "<span class="hljs-attr">contact_status</span>": <span class="hljs-string">"active"</span>,
        "<span class="hljs-attr">tax_number</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">city</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">state</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">country</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">address_line_1</span>": <span class="hljs-string">"test address"</span>,
        "<span class="hljs-attr">address_line_2</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">zip_code</span>": <span class="hljs-string">"54878787"</span>,
        "<span class="hljs-attr">dob</span>": <span class="hljs-string">"2000-06-13"</span>,
        "<span class="hljs-attr">mobile</span>": <span class="hljs-string">"8754154872154"</span>,
        "<span class="hljs-attr">landline</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">alternate_number</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">pay_term_number</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">pay_term_type</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">credit_limit</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">created_by</span>": <span class="hljs-number">1</span>,
        "<span class="hljs-attr">balance</span>": <span class="hljs-string">"0.0000"</span>,
        "<span class="hljs-attr">total_rp</span>": <span class="hljs-number">0</span>,
        "<span class="hljs-attr">total_rp_used</span>": <span class="hljs-number">0</span>,
        "<span class="hljs-attr">total_rp_expired</span>": <span class="hljs-number">0</span>,
        "<span class="hljs-attr">is_default</span>": <span class="hljs-number">0</span>,
        "<span class="hljs-attr">shipping_address</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">position</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">customer_group_id</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">crm_source</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">crm_life_stage</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">custom_field1</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">custom_field2</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">custom_field3</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">custom_field4</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">deleted_at</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2020-08-10 10:41:42"</span>,
        "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2020-08-10 10:41:42"</span>,
        "<span class="hljs-attr">remember_token</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">password</span>": <span class="hljs-literal">null</span>
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>PUT connector/api/contactapi/{contactapi}</code></p>
<p><code>PATCH connector/api/contactapi/{contactapi}</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>contact</code></td>
<td>required</td>
<td>id of the contact to be updated</td>
</tr>
</tbody>
</table>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>type</code></td>
<td>string</td>
<td>optional</td>
<td>Type of contact (supplier, customer, both)</td>
</tr>
<tr>
<td><code>supplier_business_name</code></td>
<td>string</td>
<td>optional</td>
<td>required* Required if type is supplier</td>
</tr>
<tr>
<td><code>prefix</code></td>
<td>string</td>
<td>optional</td>
<td>Prefix for the name of the contact</td>
</tr>
<tr>
<td><code>first_name</code></td>
<td>string</td>
<td>required</td>
<td>Name of the contact</td>
</tr>
<tr>
<td><code>middle_name</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>last_name</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>tax_number</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>pay_term_number</code></td>
<td>float</td>
<td>optional</td>
</tr>
<tr>
<td><code>pay_term_type</code></td>
<td>string</td>
<td>optional</td>
<td>(months ,days)</td>
</tr>
<tr>
<td><code>mobile</code></td>
<td>string</td>
<td>required</td>
</tr>
<tr>
<td><code>landline</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>alternate_number</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>address_line_1</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>address_line_2</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>city</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>state</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>country</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>zip_code</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>customer_group_id</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>contact_id</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>dob</code></td>
<td>string</td>
<td>optional</td>
<td>Fromat: Y-m-d</td>
</tr>
<tr>
<td><code>custom_field1</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>custom_field2</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>custom_field3</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>custom_field4</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>email</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>shipping_address</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>position</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>opening_balance</code></td>
<td>float</td>
<td>optional</td>
</tr>
<tr>
<td><code>source_id</code></td>
<td>integer</td>
<td>optional</td>
<td>Id of the source. Applicable only if the type is lead</td>
</tr>
<tr>
<td><code>life_stage_id</code></td>
<td>integer</td>
<td>optional</td>
<td>Id of the Life stage. Applicable only if the type is lead</td>
</tr>
<tr>
<td><code>assigned_to</code></td>
<td>array</td>
<td>optional</td>
<td>Ids of the users the lead is assigned to. Applicable only if the type is lead</td>
</tr>
</tbody>
</table>
<!-- END_0864439d4f7d266432221198feef851d -->
<!-- START_c00ac6505428393ae74ea7f7419d9de5 -->
<div name="contact-payment" data-unique="contact-payment"></div><h2 id="contact-payment">Contact payment</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre style="display: block;"><code class="language-bash hljs">curl -X POST \
    <span class="hljs-string">"https://app.azhasoft.com/connector/api/contactapi-payment"</span> \
    -H <span class="hljs-string">"Content-Type: application/json"</span> \
    -H <span class="hljs-string">"Accept: application/json"</span> \
    -H <span class="hljs-string">"Authorization: Bearer {token}"</span> \
    <span class="hljs-_">-d</span> <span class="hljs-string">'{"contact_id":17,"amount":453.13,"method":"cash","paid_on":"2020-07-22 15:48:29","account_id":14,"card_number":"cumque","card_holder_name":"ipsa","card_transaction_number":"sit","card_type":"quia","card_month":"fugiat","card_year":"aliquid","card_security":"voluptatum","transaction_no_1":"aliquid","transaction_no_2":"sed","transaction_no_3":"et","cheque_number":"vitae","bank_account_number":"placeat","note":"velit"}'</span>
</code></pre>
<pre style="display: none;"><code class="language-javascript hljs"><span class="hljs-keyword">const</span> url = <span class="hljs-keyword">new</span> URL(
    <span class="hljs-string">"https://app.azhasoft.com/connector/api/contactapi-payment"</span>
);

<span class="hljs-keyword">let</span> headers = {
    <span class="hljs-string">"Content-Type"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Accept"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Authorization"</span>: <span class="hljs-string">"Bearer {token}"</span>,
};

<span class="hljs-keyword">let</span> body = {
    <span class="hljs-string">"contact_id"</span>: <span class="hljs-number">17</span>,
    <span class="hljs-string">"amount"</span>: <span class="hljs-number">453.13</span>,
    <span class="hljs-string">"method"</span>: <span class="hljs-string">"cash"</span>,
    <span class="hljs-string">"paid_on"</span>: <span class="hljs-string">"2020-07-22 15:48:29"</span>,
    <span class="hljs-string">"account_id"</span>: <span class="hljs-number">14</span>,
    <span class="hljs-string">"card_number"</span>: <span class="hljs-string">"cumque"</span>,
    <span class="hljs-string">"card_holder_name"</span>: <span class="hljs-string">"ipsa"</span>,
    <span class="hljs-string">"card_transaction_number"</span>: <span class="hljs-string">"sit"</span>,
    <span class="hljs-string">"card_type"</span>: <span class="hljs-string">"quia"</span>,
    <span class="hljs-string">"card_month"</span>: <span class="hljs-string">"fugiat"</span>,
    <span class="hljs-string">"card_year"</span>: <span class="hljs-string">"aliquid"</span>,
    <span class="hljs-string">"card_security"</span>: <span class="hljs-string">"voluptatum"</span>,
    <span class="hljs-string">"transaction_no_1"</span>: <span class="hljs-string">"aliquid"</span>,
    <span class="hljs-string">"transaction_no_2"</span>: <span class="hljs-string">"sed"</span>,
    <span class="hljs-string">"transaction_no_3"</span>: <span class="hljs-string">"et"</span>,
    <span class="hljs-string">"cheque_number"</span>: <span class="hljs-string">"vitae"</span>,
    <span class="hljs-string">"bank_account_number"</span>: <span class="hljs-string">"placeat"</span>,
    <span class="hljs-string">"note"</span>: <span class="hljs-string">"velit"</span>
}

fetch(url, {
    method: <span class="hljs-string">"POST"</span>,
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; <span class="hljs-built_in">console</span>.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json hljs">{
    "<span class="hljs-attr">data</span>": {
        "<span class="hljs-attr">amount</span>": <span class="hljs-string">"20"</span>,
        "<span class="hljs-attr">method</span>": <span class="hljs-string">"cash"</span>,
        "<span class="hljs-attr">paid_on</span>": <span class="hljs-string">"2020-07-22 15:48:29"</span>,
        "<span class="hljs-attr">created_by</span>": <span class="hljs-number">1</span>,
        "<span class="hljs-attr">payment_for</span>": <span class="hljs-string">"19"</span>,
        "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
        "<span class="hljs-attr">is_advance</span>": <span class="hljs-number">1</span>,
        "<span class="hljs-attr">payment_ref_no</span>": <span class="hljs-string">"SP2020\/0127"</span>,
        "<span class="hljs-attr">document</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2020-07-22 15:48:29"</span>,
        "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2020-07-22 15:48:29"</span>,
        "<span class="hljs-attr">id</span>": <span class="hljs-number">215</span>
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST connector/api/contactapi-payment</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>contact_id</code></td>
<td>integer</td>
<td>required</td>
<td>id of the contact</td>
</tr>
<tr>
<td><code>amount</code></td>
<td>float</td>
<td>required</td>
<td>amount of the payment</td>
</tr>
<tr>
<td><code>method</code></td>
<td>string</td>
<td>optional</td>
<td>payment methods ('cash', 'card', 'cheque', 'bank_transfer', 'other', 'custom_pay_1', 'custom_pay_2', 'custom_pay_3')</td>
</tr>
<tr>
<td><code>paid_on</code></td>
<td>string</td>
<td>optional</td>
<td>transaction date format:Y-m-d H:i:s,</td>
</tr>
<tr>
<td><code>account_id</code></td>
<td>integer</td>
<td>optional</td>
<td>account id</td>
</tr>
<tr>
<td><code>card_number</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>card_holder_name</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>card_transaction_number</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>card_type</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>card_month</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>card_year</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>card_security</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>transaction_no_1</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>transaction_no_2</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>transaction_no_3</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>cheque_number</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>bank_account_number</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>note</code></td>
<td>string</td>
<td>optional</td>
<td>payment note</td>
</tr>
</tbody>
</table>
<!-- END_c00ac6505428393ae74ea7f7419d9de5 -->
<div name="expense-management" data-unique="expense-management"></div><h1 id="expense-management">Expense management</h1>
<!-- START_730bcfb1e5b171a39d96ecb8931567ef -->
<div name="list-expenses" data-unique="list-expenses"></div><h2 id="list-expenses">List expenses</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre style="display: block;"><code class="language-bash hljs">curl -X GET \
    -G <span class="hljs-string">"https://app.azhasoft.com/connector/api/expense?location_id=in&amp;payment_status=paid&amp;start_date=2018-06-25&amp;end_date=2018-06-25&amp;expense_for=ipsam&amp;per_page=15"</span> \
    -H <span class="hljs-string">"Content-Type: application/json"</span> \
    -H <span class="hljs-string">"Accept: application/json"</span> \
    -H <span class="hljs-string">"Authorization: Bearer {token}"</span></code></pre>
<pre style="display: none;"><code class="language-javascript hljs"><span class="hljs-keyword">const</span> url = <span class="hljs-keyword">new</span> URL(
    <span class="hljs-string">"https://app.azhasoft.com/connector/api/expense"</span>
);

<span class="hljs-keyword">let</span> params = {
    <span class="hljs-string">"location_id"</span>: <span class="hljs-string">"in"</span>,
    <span class="hljs-string">"payment_status"</span>: <span class="hljs-string">"paid"</span>,
    <span class="hljs-string">"start_date"</span>: <span class="hljs-string">"2018-06-25"</span>,
    <span class="hljs-string">"end_date"</span>: <span class="hljs-string">"2018-06-25"</span>,
    <span class="hljs-string">"expense_for"</span>: <span class="hljs-string">"ipsam"</span>,
    <span class="hljs-string">"per_page"</span>: <span class="hljs-string">"15"</span>,
};
<span class="hljs-built_in">Object</span>.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

<span class="hljs-keyword">let</span> headers = {
    <span class="hljs-string">"Content-Type"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Accept"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Authorization"</span>: <span class="hljs-string">"Bearer {token}"</span>,
};

fetch(url, {
    method: <span class="hljs-string">"GET"</span>,
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; <span class="hljs-built_in">console</span>.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json hljs">{
    "<span class="hljs-attr">data</span>": [
        {
            "<span class="hljs-attr">id</span>": <span class="hljs-number">59</span>,
            "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">location_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">payment_status</span>": <span class="hljs-string">"due"</span>,
            "<span class="hljs-attr">ref_no</span>": <span class="hljs-string">"EP2020\/0001"</span>,
            "<span class="hljs-attr">transaction_date</span>": <span class="hljs-string">"2020-07-03 12:58:00"</span>,
            "<span class="hljs-attr">total_before_tax</span>": <span class="hljs-string">"50.0000"</span>,
            "<span class="hljs-attr">tax_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">tax_amount</span>": <span class="hljs-string">"0.0000"</span>,
            "<span class="hljs-attr">final_total</span>": <span class="hljs-string">"50.0000"</span>,
            "<span class="hljs-attr">expense_category_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">document</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">created_by</span>": <span class="hljs-number">9</span>,
            "<span class="hljs-attr">is_recurring</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">recur_interval</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">recur_interval_type</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">recur_repetitions</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">recur_stopped_on</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">recur_parent_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2020-07-03 12:58:23"</span>,
            "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2020-07-03 12:58:24"</span>,
            "<span class="hljs-attr">transaction_for</span>": {
                "<span class="hljs-attr">id</span>": <span class="hljs-number">1</span>,
                "<span class="hljs-attr">user_type</span>": <span class="hljs-string">"user"</span>,
                "<span class="hljs-attr">surname</span>": <span class="hljs-string">"Mr"</span>,
                "<span class="hljs-attr">first_name</span>": <span class="hljs-string">"Admin"</span>,
                "<span class="hljs-attr">last_name</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">username</span>": <span class="hljs-string">"admin"</span>,
                "<span class="hljs-attr">email</span>": <span class="hljs-string">"admin@example.com"</span>,
                "<span class="hljs-attr">language</span>": <span class="hljs-string">"en"</span>,
                "<span class="hljs-attr">contact_no</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">address</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
                "<span class="hljs-attr">max_sales_discount_percent</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">allow_login</span>": <span class="hljs-number">1</span>,
                "<span class="hljs-attr">essentials_department_id</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">essentials_designation_id</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">status</span>": <span class="hljs-string">"active"</span>,
                "<span class="hljs-attr">crm_contact_id</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">is_cmmsn_agnt</span>": <span class="hljs-number">0</span>,
                "<span class="hljs-attr">cmmsn_percent</span>": <span class="hljs-string">"0.00"</span>,
                "<span class="hljs-attr">selected_contacts</span>": <span class="hljs-number">0</span>,
                "<span class="hljs-attr">dob</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">gender</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">marital_status</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">blood_group</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">contact_number</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">fb_link</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">twitter_link</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">social_media_1</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">social_media_2</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">permanent_address</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">current_address</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">guardian_name</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">custom_field_1</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">custom_field_2</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">custom_field_3</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">custom_field_4</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">bank_details</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">id_proof_name</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">id_proof_number</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">deleted_at</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2018-01-04 02:15:19"</span>,
                "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2018-01-04 02:15:19"</span>
            }
        }
    ],
    "<span class="hljs-attr">links</span>": {
        "<span class="hljs-attr">first</span>": <span class="hljs-string">"http:\/\/local.pos.com\/connector\/api\/expense?page=1"</span>,
        "<span class="hljs-attr">last</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">prev</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">next</span>": <span class="hljs-literal">null</span>
    },
    "<span class="hljs-attr">meta</span>": {
        "<span class="hljs-attr">current_page</span>": <span class="hljs-number">1</span>,
        "<span class="hljs-attr">from</span>": <span class="hljs-number">1</span>,
        "<span class="hljs-attr">path</span>": <span class="hljs-string">"http:\/\/local.pos.com\/connector\/api\/expense"</span>,
        "<span class="hljs-attr">per_page</span>": <span class="hljs-number">10</span>,
        "<span class="hljs-attr">to</span>": <span class="hljs-number">1</span>
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET connector/api/expense</code></p>
<h4>Query Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>location_id</code></td>
<td>optional</td>
<td>id of the location</td>
</tr>
<tr>
<td><code>payment_status</code></td>
<td>optional</td>
<td>payment status</td>
</tr>
<tr>
<td><code>start_date</code></td>
<td>optional</td>
<td>format:Y-m-d</td>
</tr>
<tr>
<td><code>end_date</code></td>
<td>optional</td>
<td>format:Y-m-d</td>
</tr>
<tr>
<td><code>expense_for</code></td>
<td>optional</td>
<td>id of the user for which expense is created</td>
</tr>
<tr>
<td><code>per_page</code></td>
<td>optional</td>
<td>Total records per page. default: 10, Set -1 for no pagination</td>
</tr>
</tbody>
</table>
<!-- END_730bcfb1e5b171a39d96ecb8931567ef -->
<!-- START_b9605a38c94472a8465c59bff2c0789d -->
<div name="create-expense-expense-refund" data-unique="create-expense-expense-refund"></div><h2 id="create-expense-expense-refund">Create expense / expense refund</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre style="display: block;"><code class="language-bash hljs">curl -X POST \
    <span class="hljs-string">"https://app.azhasoft.com/connector/api/expense"</span> \
    -H <span class="hljs-string">"Content-Type: application/json"</span> \
    -H <span class="hljs-string">"Accept: application/json"</span> \
    -H <span class="hljs-string">"Authorization: Bearer {token}"</span> \
    <span class="hljs-_">-d</span> <span class="hljs-string">'{"location_id":20,"final_total":7825.93,"transaction_date":"2020-5-7 15:20:22","tax_rate_id":12,"expense_for":1,"contact_id":17,"additional_notes":"molestiae","is_refund":0,"is_recurring":0,"recur_interval":6,"recur_interval_type":"months","subscription_repeat_on":15,"subscription_no":"est","recur_repetitions":11,"payment":[{"amount":453.13,"method":"cash","account_id":8,"card_number":"sequi","card_holder_name":"sint","card_transaction_number":"recusandae","card_type":"corporis","card_month":"tempora","card_year":"architecto","card_security":"asperiores","transaction_no_1":"quisquam","transaction_no_2":"doloremque","transaction_no_3":"odio","note":"beatae","cheque_number":"fugiat"}]}'</span>
</code></pre>
<pre style="display: none;"><code class="language-javascript hljs"><span class="hljs-keyword">const</span> url = <span class="hljs-keyword">new</span> URL(
    <span class="hljs-string">"https://app.azhasoft.com/connector/api/expense"</span>
);

<span class="hljs-keyword">let</span> headers = {
    <span class="hljs-string">"Content-Type"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Accept"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Authorization"</span>: <span class="hljs-string">"Bearer {token}"</span>,
};

<span class="hljs-keyword">let</span> body = {
    <span class="hljs-string">"location_id"</span>: <span class="hljs-number">20</span>,
    <span class="hljs-string">"final_total"</span>: <span class="hljs-number">7825.93</span>,
    <span class="hljs-string">"transaction_date"</span>: <span class="hljs-string">"2020-5-7 15:20:22"</span>,
    <span class="hljs-string">"tax_rate_id"</span>: <span class="hljs-number">12</span>,
    <span class="hljs-string">"expense_for"</span>: <span class="hljs-number">1</span>,
    <span class="hljs-string">"contact_id"</span>: <span class="hljs-number">17</span>,
    <span class="hljs-string">"additional_notes"</span>: <span class="hljs-string">"molestiae"</span>,
    <span class="hljs-string">"is_refund"</span>: <span class="hljs-number">0</span>,
    <span class="hljs-string">"is_recurring"</span>: <span class="hljs-number">0</span>,
    <span class="hljs-string">"recur_interval"</span>: <span class="hljs-number">6</span>,
    <span class="hljs-string">"recur_interval_type"</span>: <span class="hljs-string">"months"</span>,
    <span class="hljs-string">"subscription_repeat_on"</span>: <span class="hljs-number">15</span>,
    <span class="hljs-string">"subscription_no"</span>: <span class="hljs-string">"est"</span>,
    <span class="hljs-string">"recur_repetitions"</span>: <span class="hljs-number">11</span>,
    <span class="hljs-string">"payment"</span>: [
        {
            <span class="hljs-string">"amount"</span>: <span class="hljs-number">453.13</span>,
            <span class="hljs-string">"method"</span>: <span class="hljs-string">"cash"</span>,
            <span class="hljs-string">"account_id"</span>: <span class="hljs-number">8</span>,
            <span class="hljs-string">"card_number"</span>: <span class="hljs-string">"sequi"</span>,
            <span class="hljs-string">"card_holder_name"</span>: <span class="hljs-string">"sint"</span>,
            <span class="hljs-string">"card_transaction_number"</span>: <span class="hljs-string">"recusandae"</span>,
            <span class="hljs-string">"card_type"</span>: <span class="hljs-string">"corporis"</span>,
            <span class="hljs-string">"card_month"</span>: <span class="hljs-string">"tempora"</span>,
            <span class="hljs-string">"card_year"</span>: <span class="hljs-string">"architecto"</span>,
            <span class="hljs-string">"card_security"</span>: <span class="hljs-string">"asperiores"</span>,
            <span class="hljs-string">"transaction_no_1"</span>: <span class="hljs-string">"quisquam"</span>,
            <span class="hljs-string">"transaction_no_2"</span>: <span class="hljs-string">"doloremque"</span>,
            <span class="hljs-string">"transaction_no_3"</span>: <span class="hljs-string">"odio"</span>,
            <span class="hljs-string">"note"</span>: <span class="hljs-string">"beatae"</span>,
            <span class="hljs-string">"cheque_number"</span>: <span class="hljs-string">"fugiat"</span>
        }
    ]
}

fetch(url, {
    method: <span class="hljs-string">"POST"</span>,
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; <span class="hljs-built_in">console</span>.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json hljs">{
    "<span class="hljs-attr">data</span>": {
        "<span class="hljs-attr">id</span>": <span class="hljs-number">75</span>,
        "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
        "<span class="hljs-attr">location_id</span>": <span class="hljs-string">"1"</span>,
        "<span class="hljs-attr">payment_status</span>": <span class="hljs-string">"due"</span>,
        "<span class="hljs-attr">ref_no</span>": <span class="hljs-string">"EP2020\/0013"</span>,
        "<span class="hljs-attr">transaction_date</span>": <span class="hljs-string">"2020-07-06T05:31:29.480975Z"</span>,
        "<span class="hljs-attr">total_before_tax</span>": <span class="hljs-string">"43"</span>,
        "<span class="hljs-attr">tax_id</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">tax_amount</span>": <span class="hljs-number">0</span>,
        "<span class="hljs-attr">final_total</span>": <span class="hljs-string">"43"</span>,
        "<span class="hljs-attr">expense_category_id</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">document</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">created_by</span>": <span class="hljs-number">1</span>,
        "<span class="hljs-attr">is_recurring</span>": <span class="hljs-number">0</span>,
        "<span class="hljs-attr">recur_interval</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">recur_interval_type</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">recur_repetitions</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">recur_stopped_on</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">recur_parent_id</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2020-07-06 11:01:29"</span>,
        "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2020-07-06 11:01:29"</span>,
        "<span class="hljs-attr">expense_for</span>": []
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST connector/api/expense</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>location_id</code></td>
<td>integer</td>
<td>required</td>
<td>id of the business location</td>
</tr>
<tr>
<td><code>final_total</code></td>
<td>float</td>
<td>required</td>
<td>Expense amount</td>
</tr>
<tr>
<td><code>transaction_date</code></td>
<td>string</td>
<td>optional</td>
<td>transaction date format:Y-m-d H:i:s,</td>
</tr>
<tr>
<td><code>tax_rate_id</code></td>
<td>integer</td>
<td>optional</td>
<td>id of the tax rate applicable to the expense</td>
</tr>
<tr>
<td><code>expense_for</code></td>
<td>integer</td>
<td>optional</td>
<td>id of the user for which expense is created</td>
</tr>
<tr>
<td><code>contact_id</code></td>
<td>integer</td>
<td>optional</td>
<td>id of the contact(customer or supplier) for which expense is created</td>
</tr>
<tr>
<td><code>additional_notes</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>is_refund</code></td>
<td>integer</td>
<td>optional</td>
<td>whether expense refund (0, 1)</td>
</tr>
<tr>
<td><code>is_recurring</code></td>
<td>integer</td>
<td>optional</td>
<td>whether expense is recurring (0, 1)</td>
</tr>
<tr>
<td><code>recur_interval</code></td>
<td>integer</td>
<td>optional</td>
<td>value of the interval expense will be regenerated</td>
</tr>
<tr>
<td><code>recur_interval_type</code></td>
<td>string</td>
<td>optional</td>
<td>type of the recur interval ('days', 'months', 'years')</td>
</tr>
<tr>
<td><code>subscription_repeat_on</code></td>
<td>integer</td>
<td>optional</td>
<td>day of the month on which expense will be generated if recur interval type is months (1-30)</td>
</tr>
<tr>
<td><code>subscription_no</code></td>
<td>string</td>
<td>optional</td>
<td>subscription number</td>
</tr>
<tr>
<td><code>recur_repetitions</code></td>
<td>integer</td>
<td>optional</td>
<td>total number of expense to be generated</td>
</tr>
<tr>
<td><code>payment</code></td>
<td>array</td>
<td>optional</td>
<td>payment lines for the expense</td>
</tr>
<tr>
<td><code>payment.*.amount</code></td>
<td>float</td>
<td>optional</td>
<td>amount of the payment</td>
</tr>
<tr>
<td><code>payment.*.method</code></td>
<td>string</td>
<td>optional</td>
<td>payment methods ('cash', 'card', 'cheque', 'bank_transfer', 'other', 'custom_pay_1', 'custom_pay_2', 'custom_pay_3')</td>
</tr>
<tr>
<td><code>payment.*.account_id</code></td>
<td>integer</td>
<td>optional</td>
<td>account id</td>
</tr>
<tr>
<td><code>payment.*.card_number</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>payment.*.card_holder_name</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>payment.*.card_transaction_number</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>payment.*.card_type</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>payment.*.card_month</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>payment.*.card_year</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>payment.*.card_security</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>payment.*.transaction_no_1</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>payment.*.transaction_no_2</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>payment.*.transaction_no_3</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>payment.*.note</code></td>
<td>string</td>
<td>optional</td>
<td>payment note</td>
</tr>
<tr>
<td><code>payment.*.cheque_number</code></td>
<td>string</td>
<td>optional</td>
</tr>
</tbody>
</table>
<!-- END_b9605a38c94472a8465c59bff2c0789d -->
<!-- START_080493e04c6fbd231ad5580a2473865c -->
<div name="get-the-specified-expense-expense-refund" data-unique="get-the-specified-expense-expense-refund"></div><h2 id="get-the-specified-expense-expense-refund">Get the specified expense / expense refund</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre style="display: block;"><code class="language-bash hljs">curl -X GET \
    -G <span class="hljs-string">"https://app.azhasoft.com/connector/api/expense/59"</span> \
    -H <span class="hljs-string">"Content-Type: application/json"</span> \
    -H <span class="hljs-string">"Accept: application/json"</span> \
    -H <span class="hljs-string">"Authorization: Bearer {token}"</span></code></pre>
<pre style="display: none;"><code class="language-javascript hljs"><span class="hljs-keyword">const</span> url = <span class="hljs-keyword">new</span> URL(
    <span class="hljs-string">"https://app.azhasoft.com/connector/api/expense/59"</span>
);

<span class="hljs-keyword">let</span> headers = {
    <span class="hljs-string">"Content-Type"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Accept"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Authorization"</span>: <span class="hljs-string">"Bearer {token}"</span>,
};

fetch(url, {
    method: <span class="hljs-string">"GET"</span>,
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; <span class="hljs-built_in">console</span>.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json hljs">{
    "<span class="hljs-attr">data</span>": [
        {
            "<span class="hljs-attr">id</span>": <span class="hljs-number">59</span>,
            "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">location_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">payment_status</span>": <span class="hljs-string">"due"</span>,
            "<span class="hljs-attr">ref_no</span>": <span class="hljs-string">"EP2020\/0001"</span>,
            "<span class="hljs-attr">transaction_date</span>": <span class="hljs-string">"2020-07-03 12:58:00"</span>,
            "<span class="hljs-attr">total_before_tax</span>": <span class="hljs-string">"50.0000"</span>,
            "<span class="hljs-attr">tax_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">tax_amount</span>": <span class="hljs-string">"0.0000"</span>,
            "<span class="hljs-attr">final_total</span>": <span class="hljs-string">"50.0000"</span>,
            "<span class="hljs-attr">expense_category_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">document</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">created_by</span>": <span class="hljs-number">9</span>,
            "<span class="hljs-attr">is_recurring</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">recur_interval</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">recur_interval_type</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">recur_repetitions</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">recur_stopped_on</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">recur_parent_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2020-07-03 12:58:23"</span>,
            "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2020-07-03 12:58:24"</span>,
            "<span class="hljs-attr">transaction_for</span>": {
                "<span class="hljs-attr">id</span>": <span class="hljs-number">1</span>,
                "<span class="hljs-attr">user_type</span>": <span class="hljs-string">"user"</span>,
                "<span class="hljs-attr">surname</span>": <span class="hljs-string">"Mr"</span>,
                "<span class="hljs-attr">first_name</span>": <span class="hljs-string">"Admin"</span>,
                "<span class="hljs-attr">last_name</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">username</span>": <span class="hljs-string">"admin"</span>,
                "<span class="hljs-attr">email</span>": <span class="hljs-string">"admin@example.com"</span>,
                "<span class="hljs-attr">language</span>": <span class="hljs-string">"en"</span>,
                "<span class="hljs-attr">contact_no</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">address</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
                "<span class="hljs-attr">max_sales_discount_percent</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">allow_login</span>": <span class="hljs-number">1</span>,
                "<span class="hljs-attr">essentials_department_id</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">essentials_designation_id</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">status</span>": <span class="hljs-string">"active"</span>,
                "<span class="hljs-attr">crm_contact_id</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">is_cmmsn_agnt</span>": <span class="hljs-number">0</span>,
                "<span class="hljs-attr">cmmsn_percent</span>": <span class="hljs-string">"0.00"</span>,
                "<span class="hljs-attr">selected_contacts</span>": <span class="hljs-number">0</span>,
                "<span class="hljs-attr">dob</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">gender</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">marital_status</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">blood_group</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">contact_number</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">fb_link</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">twitter_link</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">social_media_1</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">social_media_2</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">permanent_address</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">current_address</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">guardian_name</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">custom_field_1</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">custom_field_2</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">custom_field_3</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">custom_field_4</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">bank_details</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">id_proof_name</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">id_proof_number</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">deleted_at</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2018-01-04 02:15:19"</span>,
                "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2018-01-04 02:15:19"</span>
            }
        }
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET connector/api/expense/{expense}</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>expense</code></td>
<td>required</td>
<td>comma separated ids of the expenses</td>
</tr>
</tbody>
</table>
<!-- END_080493e04c6fbd231ad5580a2473865c -->
<!-- START_c6ce035dd3adbdb5657673678f7ec844 -->
<div name="update-expense-expense-refund" data-unique="update-expense-expense-refund"></div><h2 id="update-expense-expense-refund">Update expense / expense refund</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre style="display: block;"><code class="language-bash hljs">curl -X PUT \
    <span class="hljs-string">"https://app.azhasoft.com/connector/api/expense/1"</span> \
    -H <span class="hljs-string">"Content-Type: application/json"</span> \
    -H <span class="hljs-string">"Accept: application/json"</span> \
    -H <span class="hljs-string">"Authorization: Bearer {token}"</span> \
    <span class="hljs-_">-d</span> <span class="hljs-string">'{"final_total":12040736.922855476,"transaction_date":"2020-5-7 15:20:22","tax_rate_id":14,"expense_for":11,"contact_id":1,"additional_notes":"autem","is_recurring":0,"recur_interval":8,"recur_interval_type":"months","subscription_repeat_on":15,"subscription_no":"corporis","recur_repetitions":19,"payment":[]}'</span>
</code></pre>
<pre style="display: none;"><code class="language-javascript hljs"><span class="hljs-keyword">const</span> url = <span class="hljs-keyword">new</span> URL(
    <span class="hljs-string">"https://app.azhasoft.com/connector/api/expense/1"</span>
);

<span class="hljs-keyword">let</span> headers = {
    <span class="hljs-string">"Content-Type"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Accept"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Authorization"</span>: <span class="hljs-string">"Bearer {token}"</span>,
};

<span class="hljs-keyword">let</span> body = {
    <span class="hljs-string">"final_total"</span>: <span class="hljs-number">12040736.922855476</span>,
    <span class="hljs-string">"transaction_date"</span>: <span class="hljs-string">"2020-5-7 15:20:22"</span>,
    <span class="hljs-string">"tax_rate_id"</span>: <span class="hljs-number">14</span>,
    <span class="hljs-string">"expense_for"</span>: <span class="hljs-number">11</span>,
    <span class="hljs-string">"contact_id"</span>: <span class="hljs-number">1</span>,
    <span class="hljs-string">"additional_notes"</span>: <span class="hljs-string">"autem"</span>,
    <span class="hljs-string">"is_recurring"</span>: <span class="hljs-number">0</span>,
    <span class="hljs-string">"recur_interval"</span>: <span class="hljs-number">8</span>,
    <span class="hljs-string">"recur_interval_type"</span>: <span class="hljs-string">"months"</span>,
    <span class="hljs-string">"subscription_repeat_on"</span>: <span class="hljs-number">15</span>,
    <span class="hljs-string">"subscription_no"</span>: <span class="hljs-string">"corporis"</span>,
    <span class="hljs-string">"recur_repetitions"</span>: <span class="hljs-number">19</span>,
    <span class="hljs-string">"payment"</span>: []
}

fetch(url, {
    method: <span class="hljs-string">"PUT"</span>,
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; <span class="hljs-built_in">console</span>.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json hljs">{
    "<span class="hljs-attr">data</span>": {
        "<span class="hljs-attr">id</span>": <span class="hljs-number">75</span>,
        "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
        "<span class="hljs-attr">location_id</span>": <span class="hljs-string">"1"</span>,
        "<span class="hljs-attr">payment_status</span>": <span class="hljs-string">"due"</span>,
        "<span class="hljs-attr">ref_no</span>": <span class="hljs-string">"EP2020\/0013"</span>,
        "<span class="hljs-attr">transaction_date</span>": <span class="hljs-string">"2020-07-06T05:31:29.480975Z"</span>,
        "<span class="hljs-attr">total_before_tax</span>": <span class="hljs-string">"43"</span>,
        "<span class="hljs-attr">tax_id</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">tax_amount</span>": <span class="hljs-number">0</span>,
        "<span class="hljs-attr">final_total</span>": <span class="hljs-string">"43"</span>,
        "<span class="hljs-attr">expense_category_id</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">document</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">created_by</span>": <span class="hljs-number">1</span>,
        "<span class="hljs-attr">is_recurring</span>": <span class="hljs-number">0</span>,
        "<span class="hljs-attr">recur_interval</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">recur_interval_type</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">recur_repetitions</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">recur_stopped_on</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">recur_parent_id</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2020-07-06 11:01:29"</span>,
        "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2020-07-06 11:01:29"</span>,
        "<span class="hljs-attr">expense_for</span>": []
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>PUT connector/api/expense/{expense}</code></p>
<p><code>PATCH connector/api/expense/{expense}</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>final_total</code></td>
<td>float</td>
<td>optional</td>
<td>Expense amount</td>
</tr>
<tr>
<td><code>transaction_date</code></td>
<td>string</td>
<td>optional</td>
<td>transaction date format:Y-m-d H:i:s,</td>
</tr>
<tr>
<td><code>tax_rate_id</code></td>
<td>integer</td>
<td>optional</td>
<td>id of the tax rate applicable to the expense</td>
</tr>
<tr>
<td><code>expense_for</code></td>
<td>integer</td>
<td>optional</td>
<td>id of the user for which expense is created</td>
</tr>
<tr>
<td><code>contact_id</code></td>
<td>integer</td>
<td>optional</td>
<td>id of the contact(customer or supplier) for which expense is created</td>
</tr>
<tr>
<td><code>additional_notes</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>is_recurring</code></td>
<td>integer</td>
<td>optional</td>
<td>whether expense is recurring (0, 1)</td>
</tr>
<tr>
<td><code>recur_interval</code></td>
<td>integer</td>
<td>optional</td>
<td>value of the interval expense will be regenerated</td>
</tr>
<tr>
<td><code>recur_interval_type</code></td>
<td>string</td>
<td>optional</td>
<td>type of the recur interval ('days', 'months', 'years')</td>
</tr>
<tr>
<td><code>subscription_repeat_on</code></td>
<td>integer</td>
<td>optional</td>
<td>day of the month on which expense will be generated if recur interval type is months (1-30)</td>
</tr>
<tr>
<td><code>subscription_no</code></td>
<td>string</td>
<td>optional</td>
<td>subscription number</td>
</tr>
<tr>
<td><code>recur_repetitions</code></td>
<td>integer</td>
<td>optional</td>
<td>total number of expense to be generated</td>
</tr>
<tr>
<td><code>payment</code></td>
<td>array</td>
<td>optional</td>
<td>payment lines for the expense</td>
</tr>
</tbody>
</table>
<!-- END_c6ce035dd3adbdb5657673678f7ec844 -->
<!-- START_e1f7f0662d8d007a0f8501170b0d7409 -->
<div name="list-expense-refunds" data-unique="list-expense-refunds"></div><h2 id="list-expense-refunds">List expense refunds</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre style="display: block;"><code class="language-bash hljs">curl -X GET \
    -G <span class="hljs-string">"https://app.azhasoft.com/connector/api/expense-refund?location_id=sed&amp;payment_status=paid&amp;start_date=2018-06-25&amp;end_date=2018-06-25&amp;expense_for=voluptatem&amp;per_page=15"</span> \
    -H <span class="hljs-string">"Content-Type: application/json"</span> \
    -H <span class="hljs-string">"Accept: application/json"</span> \
    -H <span class="hljs-string">"Authorization: Bearer {token}"</span></code></pre>
<pre style="display: none;"><code class="language-javascript hljs"><span class="hljs-keyword">const</span> url = <span class="hljs-keyword">new</span> URL(
    <span class="hljs-string">"https://app.azhasoft.com/connector/api/expense-refund"</span>
);

<span class="hljs-keyword">let</span> params = {
    <span class="hljs-string">"location_id"</span>: <span class="hljs-string">"sed"</span>,
    <span class="hljs-string">"payment_status"</span>: <span class="hljs-string">"paid"</span>,
    <span class="hljs-string">"start_date"</span>: <span class="hljs-string">"2018-06-25"</span>,
    <span class="hljs-string">"end_date"</span>: <span class="hljs-string">"2018-06-25"</span>,
    <span class="hljs-string">"expense_for"</span>: <span class="hljs-string">"voluptatem"</span>,
    <span class="hljs-string">"per_page"</span>: <span class="hljs-string">"15"</span>,
};
<span class="hljs-built_in">Object</span>.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

<span class="hljs-keyword">let</span> headers = {
    <span class="hljs-string">"Content-Type"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Accept"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Authorization"</span>: <span class="hljs-string">"Bearer {token}"</span>,
};

fetch(url, {
    method: <span class="hljs-string">"GET"</span>,
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; <span class="hljs-built_in">console</span>.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json hljs">{
    "<span class="hljs-attr">data</span>": [
        {
            "<span class="hljs-attr">id</span>": <span class="hljs-number">230</span>,
            "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">location_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">payment_status</span>": <span class="hljs-string">"partial"</span>,
            "<span class="hljs-attr">ref_no</span>": <span class="hljs-string">"refund"</span>,
            "<span class="hljs-attr">transaction_date</span>": <span class="hljs-string">"2020-12-15 11:16:00"</span>,
            "<span class="hljs-attr">total_before_tax</span>": <span class="hljs-string">"65.0000"</span>,
            "<span class="hljs-attr">tax_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">tax_amount</span>": <span class="hljs-string">"0.0000"</span>,
            "<span class="hljs-attr">final_total</span>": <span class="hljs-string">"65.0000"</span>,
            "<span class="hljs-attr">expense_category_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">document</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">created_by</span>": <span class="hljs-number">9</span>,
            "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2020-12-15 11:46:56"</span>,
            "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2020-12-15 12:47:30"</span>,
            "<span class="hljs-attr">expense_for</span>": []
        }
    ],
    "<span class="hljs-attr">links</span>": {
        "<span class="hljs-attr">first</span>": <span class="hljs-string">"http:\/\/local.pos.com\/connector\/api\/expense-refund?page=1"</span>,
        "<span class="hljs-attr">last</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">prev</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">next</span>": <span class="hljs-literal">null</span>
    },
    "<span class="hljs-attr">meta</span>": {
        "<span class="hljs-attr">current_page</span>": <span class="hljs-number">1</span>,
        "<span class="hljs-attr">from</span>": <span class="hljs-number">1</span>,
        "<span class="hljs-attr">path</span>": <span class="hljs-string">"http:\/\/local.pos.com\/connector\/api\/expense-refund"</span>,
        "<span class="hljs-attr">per_page</span>": <span class="hljs-number">15</span>,
        "<span class="hljs-attr">to</span>": <span class="hljs-number">1</span>
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET connector/api/expense-refund</code></p>
<h4>Query Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>location_id</code></td>
<td>optional</td>
<td>id of the location</td>
</tr>
<tr>
<td><code>payment_status</code></td>
<td>optional</td>
<td>payment status</td>
</tr>
<tr>
<td><code>start_date</code></td>
<td>optional</td>
<td>format:Y-m-d</td>
</tr>
<tr>
<td><code>end_date</code></td>
<td>optional</td>
<td>format:Y-m-d</td>
</tr>
<tr>
<td><code>expense_for</code></td>
<td>optional</td>
<td>id of the user for which expense is created</td>
</tr>
<tr>
<td><code>per_page</code></td>
<td>optional</td>
<td>Total records per page. default: 10, Set -1 for no pagination</td>
</tr>
</tbody>
</table>
<!-- END_e1f7f0662d8d007a0f8501170b0d7409 -->
<div name="product-management" data-unique="product-management"></div><h1 id="product-management">Product management</h1>
<!-- START_404e69adab4f56eabc2cc3d3cfd9e802 -->
<div name="list-products" data-unique="list-products"></div><h2 id="list-products">List products</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre style="display: block;"><code class="language-bash hljs">curl -X GET \
    -G <span class="hljs-string">"https://app.azhasoft.com/connector/api/product?brand_id=alias&amp;category_id=alias&amp;sub_category_id=nobis&amp;location_id=ut&amp;selling_price_group=accusamus&amp;name=nisi&amp;sku=ipsa&amp;per_page=10"</span> \
    -H <span class="hljs-string">"Content-Type: application/json"</span> \
    -H <span class="hljs-string">"Accept: application/json"</span> \
    -H <span class="hljs-string">"Authorization: Bearer {token}"</span></code></pre>
<pre style="display: none;"><code class="language-javascript hljs"><span class="hljs-keyword">const</span> url = <span class="hljs-keyword">new</span> URL(
    <span class="hljs-string">"https://app.azhasoft.com/connector/api/product"</span>
);

<span class="hljs-keyword">let</span> params = {
    <span class="hljs-string">"brand_id"</span>: <span class="hljs-string">"alias"</span>,
    <span class="hljs-string">"category_id"</span>: <span class="hljs-string">"alias"</span>,
    <span class="hljs-string">"sub_category_id"</span>: <span class="hljs-string">"nobis"</span>,
    <span class="hljs-string">"location_id"</span>: <span class="hljs-string">"ut"</span>,
    <span class="hljs-string">"selling_price_group"</span>: <span class="hljs-string">"accusamus"</span>,
    <span class="hljs-string">"name"</span>: <span class="hljs-string">"nisi"</span>,
    <span class="hljs-string">"sku"</span>: <span class="hljs-string">"ipsa"</span>,
    <span class="hljs-string">"per_page"</span>: <span class="hljs-string">"10"</span>,
};
<span class="hljs-built_in">Object</span>.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

<span class="hljs-keyword">let</span> headers = {
    <span class="hljs-string">"Content-Type"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Accept"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Authorization"</span>: <span class="hljs-string">"Bearer {token}"</span>,
};

fetch(url, {
    method: <span class="hljs-string">"GET"</span>,
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; <span class="hljs-built_in">console</span>.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json hljs">{
    "<span class="hljs-attr">data</span>": [
        {
            "<span class="hljs-attr">id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">name</span>": <span class="hljs-string">"Men's Reverse Fleece Crew"</span>,
            "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">type</span>": <span class="hljs-string">"single"</span>,
            "<span class="hljs-attr">sub_unit_ids</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">enable_stock</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">alert_quantity</span>": <span class="hljs-string">"5.0000"</span>,
            "<span class="hljs-attr">sku</span>": <span class="hljs-string">"AS0001"</span>,
            "<span class="hljs-attr">barcode_type</span>": <span class="hljs-string">"C128"</span>,
            "<span class="hljs-attr">expiry_period</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">expiry_period_type</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">enable_sr_no</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">weight</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">product_custom_field1</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">product_custom_field2</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">product_custom_field3</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">product_custom_field4</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">image</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">woocommerce_media_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">product_description</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">created_by</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">warranty_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">is_inactive</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">repair_model_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">not_for_selling</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">ecom_shipping_class_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">ecom_active_in_store</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">woocommerce_product_id</span>": <span class="hljs-number">356</span>,
            "<span class="hljs-attr">woocommerce_disable_sync</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">image_url</span>": <span class="hljs-string">"http:\/\/local.pos.com\/img\/default.png"</span>,
            "<span class="hljs-attr">product_variations</span>": [
                {
                    "<span class="hljs-attr">id</span>": <span class="hljs-number">1</span>,
                    "<span class="hljs-attr">variation_template_id</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">name</span>": <span class="hljs-string">"DUMMY"</span>,
                    "<span class="hljs-attr">product_id</span>": <span class="hljs-number">1</span>,
                    "<span class="hljs-attr">is_dummy</span>": <span class="hljs-number">1</span>,
                    "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2018-01-03 21:29:08"</span>,
                    "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2018-01-03 21:29:08"</span>,
                    "<span class="hljs-attr">variations</span>": [
                        {
                            "<span class="hljs-attr">id</span>": <span class="hljs-number">1</span>,
                            "<span class="hljs-attr">name</span>": <span class="hljs-string">"DUMMY"</span>,
                            "<span class="hljs-attr">product_id</span>": <span class="hljs-number">1</span>,
                            "<span class="hljs-attr">sub_sku</span>": <span class="hljs-string">"AS0001"</span>,
                            "<span class="hljs-attr">product_variation_id</span>": <span class="hljs-number">1</span>,
                            "<span class="hljs-attr">woocommerce_variation_id</span>": <span class="hljs-literal">null</span>,
                            "<span class="hljs-attr">variation_value_id</span>": <span class="hljs-literal">null</span>,
                            "<span class="hljs-attr">default_purchase_price</span>": <span class="hljs-string">"130.0000"</span>,
                            "<span class="hljs-attr">dpp_inc_tax</span>": <span class="hljs-string">"143.0000"</span>,
                            "<span class="hljs-attr">profit_percent</span>": <span class="hljs-string">"0.0000"</span>,
                            "<span class="hljs-attr">default_sell_price</span>": <span class="hljs-string">"130.0000"</span>,
                            "<span class="hljs-attr">sell_price_inc_tax</span>": <span class="hljs-string">"143.0000"</span>,
                            "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2018-01-03 21:29:08"</span>,
                            "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2020-06-09 00:23:22"</span>,
                            "<span class="hljs-attr">deleted_at</span>": <span class="hljs-literal">null</span>,
                            "<span class="hljs-attr">combo_variations</span>": <span class="hljs-literal">null</span>,
                            "<span class="hljs-attr">variation_location_details</span>": [
                                {
                                    "<span class="hljs-attr">id</span>": <span class="hljs-number">56</span>,
                                    "<span class="hljs-attr">product_id</span>": <span class="hljs-number">1</span>,
                                    "<span class="hljs-attr">product_variation_id</span>": <span class="hljs-number">1</span>,
                                    "<span class="hljs-attr">variation_id</span>": <span class="hljs-number">1</span>,
                                    "<span class="hljs-attr">location_id</span>": <span class="hljs-number">1</span>,
                                    "<span class="hljs-attr">qty_available</span>": <span class="hljs-string">"20.0000"</span>,
                                    "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2020-06-08 23:46:40"</span>,
                                    "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2020-06-08 23:46:40"</span>
                                }
                            ],
                            "<span class="hljs-attr">media</span>": [
                                {
                                    "<span class="hljs-attr">id</span>": <span class="hljs-number">1</span>,
                                    "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
                                    "<span class="hljs-attr">file_name</span>": <span class="hljs-string">"1591686466_978227300_nn.jpeg"</span>,
                                    "<span class="hljs-attr">description</span>": <span class="hljs-literal">null</span>,
                                    "<span class="hljs-attr">uploaded_by</span>": <span class="hljs-number">9</span>,
                                    "<span class="hljs-attr">model_type</span>": <span class="hljs-string">"App\\Variation"</span>,
                                    "<span class="hljs-attr">woocommerce_media_id</span>": <span class="hljs-literal">null</span>,
                                    "<span class="hljs-attr">model_id</span>": <span class="hljs-number">1</span>,
                                    "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2020-06-09 00:07:46"</span>,
                                    "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2020-06-09 00:07:46"</span>,
                                    "<span class="hljs-attr">display_name</span>": <span class="hljs-string">"nn.jpeg"</span>,
                                    "<span class="hljs-attr">display_url</span>": <span class="hljs-string">"http:\/\/local.pos.com\/uploads\/media\/1591686466_978227300_nn.jpeg"</span>
                                }
                            ],
                            "<span class="hljs-attr">selling_price_group</span>": [
                                {
                                    "<span class="hljs-attr">id</span>": <span class="hljs-number">2</span>,
                                    "<span class="hljs-attr">variation_id</span>": <span class="hljs-number">1</span>,
                                    "<span class="hljs-attr">price_group_id</span>": <span class="hljs-number">1</span>,
                                    "<span class="hljs-attr">price_inc_tax</span>": <span class="hljs-string">"140.0000"</span>,
                                    "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2020-06-09 00:23:31"</span>,
                                    "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2020-06-09 00:23:31"</span>
                                }
                            ]
                        }
                    ]
                }
            ],
            "<span class="hljs-attr">brand</span>": {
                "<span class="hljs-attr">id</span>": <span class="hljs-number">1</span>,
                "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
                "<span class="hljs-attr">name</span>": <span class="hljs-string">"Levis"</span>,
                "<span class="hljs-attr">description</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">created_by</span>": <span class="hljs-number">1</span>,
                "<span class="hljs-attr">deleted_at</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2018-01-03 21:19:47"</span>,
                "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2018-01-03 21:19:47"</span>
            },
            "<span class="hljs-attr">unit</span>": {
                "<span class="hljs-attr">id</span>": <span class="hljs-number">1</span>,
                "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
                "<span class="hljs-attr">actual_name</span>": <span class="hljs-string">"Pieces"</span>,
                "<span class="hljs-attr">short_name</span>": <span class="hljs-string">"Pc(s)"</span>,
                "<span class="hljs-attr">allow_decimal</span>": <span class="hljs-number">0</span>,
                "<span class="hljs-attr">base_unit_id</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">base_unit_multiplier</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">created_by</span>": <span class="hljs-number">1</span>,
                "<span class="hljs-attr">deleted_at</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2018-01-03 15:15:20"</span>,
                "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2018-01-03 15:15:20"</span>
            },
            "<span class="hljs-attr">category</span>": {
                "<span class="hljs-attr">id</span>": <span class="hljs-number">1</span>,
                "<span class="hljs-attr">name</span>": <span class="hljs-string">"Men's"</span>,
                "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
                "<span class="hljs-attr">short_code</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">parent_id</span>": <span class="hljs-number">0</span>,
                "<span class="hljs-attr">created_by</span>": <span class="hljs-number">1</span>,
                "<span class="hljs-attr">category_type</span>": <span class="hljs-string">"product"</span>,
                "<span class="hljs-attr">description</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">slug</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">woocommerce_cat_id</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">deleted_at</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2018-01-03 21:06:34"</span>,
                "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2018-01-03 21:06:34"</span>
            },
            "<span class="hljs-attr">sub_category</span>": {
                "<span class="hljs-attr">id</span>": <span class="hljs-number">5</span>,
                "<span class="hljs-attr">name</span>": <span class="hljs-string">"Shirts"</span>,
                "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
                "<span class="hljs-attr">short_code</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">parent_id</span>": <span class="hljs-number">1</span>,
                "<span class="hljs-attr">created_by</span>": <span class="hljs-number">1</span>,
                "<span class="hljs-attr">category_type</span>": <span class="hljs-string">"product"</span>,
                "<span class="hljs-attr">description</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">slug</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">woocommerce_cat_id</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">deleted_at</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2018-01-03 21:08:18"</span>,
                "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2018-01-03 21:08:18"</span>
            },
            "<span class="hljs-attr">product_tax</span>": {
                "<span class="hljs-attr">id</span>": <span class="hljs-number">1</span>,
                "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
                "<span class="hljs-attr">name</span>": <span class="hljs-string">"VAT@10%"</span>,
                "<span class="hljs-attr">amount</span>": <span class="hljs-number">10</span>,
                "<span class="hljs-attr">is_tax_group</span>": <span class="hljs-number">0</span>,
                "<span class="hljs-attr">created_by</span>": <span class="hljs-number">1</span>,
                "<span class="hljs-attr">woocommerce_tax_rate_id</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">deleted_at</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2018-01-04 02:40:07"</span>,
                "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2018-01-04 02:40:07"</span>
            },
            "<span class="hljs-attr">product_locations</span>": [
                {
                    "<span class="hljs-attr">id</span>": <span class="hljs-number">1</span>,
                    "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
                    "<span class="hljs-attr">location_id</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">name</span>": <span class="hljs-string">"Awesome Shop"</span>,
                    "<span class="hljs-attr">landmark</span>": <span class="hljs-string">"Linking Street"</span>,
                    "<span class="hljs-attr">country</span>": <span class="hljs-string">"USA"</span>,
                    "<span class="hljs-attr">state</span>": <span class="hljs-string">"Arizona"</span>,
                    "<span class="hljs-attr">city</span>": <span class="hljs-string">"Phoenix"</span>,
                    "<span class="hljs-attr">zip_code</span>": <span class="hljs-string">"85001"</span>,
                    "<span class="hljs-attr">invoice_scheme_id</span>": <span class="hljs-number">1</span>,
                    "<span class="hljs-attr">invoice_layout_id</span>": <span class="hljs-number">1</span>,
                    "<span class="hljs-attr">selling_price_group_id</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">print_receipt_on_invoice</span>": <span class="hljs-number">1</span>,
                    "<span class="hljs-attr">receipt_printer_type</span>": <span class="hljs-string">"browser"</span>,
                    "<span class="hljs-attr">printer_id</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">mobile</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">alternate_number</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">email</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">website</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">featured_products</span>": [
                        <span class="hljs-string">"5"</span>,
                        <span class="hljs-string">"71"</span>
                    ],
                    "<span class="hljs-attr">is_active</span>": <span class="hljs-number">1</span>,
                    "<span class="hljs-attr">default_payment_accounts</span>": <span class="hljs-string">"{\"cash\":{\"is_enabled\":\"1\",\"account\":\"1\"},\"card\":{\"is_enabled\":\"1\",\"account\":\"3\"},\"cheque\":{\"is_enabled\":\"1\",\"account\":\"2\"},\"bank_transfer\":{\"is_enabled\":\"1\",\"account\":\"1\"},\"other\":{\"is_enabled\":\"1\",\"account\":\"3\"},\"custom_pay_1\":{\"is_enabled\":\"1\",\"account\":\"1\"},\"custom_pay_2\":{\"is_enabled\":\"1\",\"account\":\"2\"},\"custom_pay_3\":{\"is_enabled\":\"1\",\"account\":\"3\"}}"</span>,
                    "<span class="hljs-attr">custom_field1</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">custom_field2</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">custom_field3</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">custom_field4</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">deleted_at</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2018-01-04 02:15:20"</span>,
                    "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2020-06-09 01:07:05"</span>,
                    "<span class="hljs-attr">pivot</span>": {
                        "<span class="hljs-attr">product_id</span>": <span class="hljs-number">2</span>,
                        "<span class="hljs-attr">location_id</span>": <span class="hljs-number">1</span>
                    }
                }
            ]
        }
    ],
    "<span class="hljs-attr">links</span>": {
        "<span class="hljs-attr">first</span>": <span class="hljs-string">"http:\/\/local.pos.com\/connector\/api\/product?page=1"</span>,
        "<span class="hljs-attr">last</span>": <span class="hljs-string">"http:\/\/local.pos.com\/connector\/api\/product?page=32"</span>,
        "<span class="hljs-attr">prev</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">next</span>": <span class="hljs-string">"http:\/\/local.pos.com\/connector\/api\/product?page=2"</span>
    },
    "<span class="hljs-attr">meta</span>": {
        "<span class="hljs-attr">current_page</span>": <span class="hljs-number">1</span>,
        "<span class="hljs-attr">from</span>": <span class="hljs-number">1</span>,
        "<span class="hljs-attr">path</span>": <span class="hljs-string">"http:\/\/local.pos.com\/connector\/api\/product"</span>,
        "<span class="hljs-attr">per_page</span>": <span class="hljs-number">10</span>,
        "<span class="hljs-attr">to</span>": <span class="hljs-number">10</span>
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET connector/api/product</code></p>
<h4>Query Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>brand_id</code></td>
<td>optional</td>
</tr>
<tr>
<td><code>category_id</code></td>
<td>optional</td>
</tr>
<tr>
<td><code>sub_category_id</code></td>
<td>optional</td>
</tr>
<tr>
<td><code>location_id</code></td>
<td>optional</td>
</tr>
<tr>
<td><code>selling_price_group</code></td>
<td>optional</td>
<td>(1, 0)</td>
</tr>
<tr>
<td><code>name</code></td>
<td>optional</td>
<td>Search term for product name</td>
</tr>
<tr>
<td><code>sku</code></td>
<td>optional</td>
<td>Search term for product sku</td>
</tr>
<tr>
<td><code>per_page</code></td>
<td>optional</td>
<td>Total records per page. default: 10, Set -1 for no pagination</td>
</tr>
</tbody>
</table>
<!-- END_404e69adab4f56eabc2cc3d3cfd9e802 -->
<!-- START_3bba79ec6b433bb13818ff41ac1d70e6 -->
<div name="get-the-specified-product" data-unique="get-the-specified-product"></div><h2 id="get-the-specified-product">Get the specified product</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre style="display: block;"><code class="language-bash hljs">curl -X GET \
    -G <span class="hljs-string">"https://app.azhasoft.com/connector/api/product/1?selling_price_group=est"</span> \
    -H <span class="hljs-string">"Content-Type: application/json"</span> \
    -H <span class="hljs-string">"Accept: application/json"</span> \
    -H <span class="hljs-string">"Authorization: Bearer {token}"</span></code></pre>
<pre style="display: none;"><code class="language-javascript hljs"><span class="hljs-keyword">const</span> url = <span class="hljs-keyword">new</span> URL(
    <span class="hljs-string">"https://app.azhasoft.com/connector/api/product/1"</span>
);

<span class="hljs-keyword">let</span> params = {
    <span class="hljs-string">"selling_price_group"</span>: <span class="hljs-string">"est"</span>,
};
<span class="hljs-built_in">Object</span>.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

<span class="hljs-keyword">let</span> headers = {
    <span class="hljs-string">"Content-Type"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Accept"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Authorization"</span>: <span class="hljs-string">"Bearer {token}"</span>,
};

fetch(url, {
    method: <span class="hljs-string">"GET"</span>,
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; <span class="hljs-built_in">console</span>.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json hljs">{
    "<span class="hljs-attr">data</span>": [
        {
            "<span class="hljs-attr">id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">name</span>": <span class="hljs-string">"Men's Reverse Fleece Crew"</span>,
            "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">type</span>": <span class="hljs-string">"single"</span>,
            "<span class="hljs-attr">sub_unit_ids</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">enable_stock</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">alert_quantity</span>": <span class="hljs-string">"5.0000"</span>,
            "<span class="hljs-attr">sku</span>": <span class="hljs-string">"AS0001"</span>,
            "<span class="hljs-attr">barcode_type</span>": <span class="hljs-string">"C128"</span>,
            "<span class="hljs-attr">expiry_period</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">expiry_period_type</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">enable_sr_no</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">weight</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">product_custom_field1</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">product_custom_field2</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">product_custom_field3</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">product_custom_field4</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">image</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">woocommerce_media_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">product_description</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">created_by</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">warranty_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">is_inactive</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">repair_model_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">not_for_selling</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">ecom_shipping_class_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">ecom_active_in_store</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">woocommerce_product_id</span>": <span class="hljs-number">356</span>,
            "<span class="hljs-attr">woocommerce_disable_sync</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">image_url</span>": <span class="hljs-string">"http:\/\/local.pos.com\/img\/default.png"</span>,
            "<span class="hljs-attr">product_variations</span>": [
                {
                    "<span class="hljs-attr">id</span>": <span class="hljs-number">1</span>,
                    "<span class="hljs-attr">variation_template_id</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">name</span>": <span class="hljs-string">"DUMMY"</span>,
                    "<span class="hljs-attr">product_id</span>": <span class="hljs-number">1</span>,
                    "<span class="hljs-attr">is_dummy</span>": <span class="hljs-number">1</span>,
                    "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2018-01-03 21:29:08"</span>,
                    "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2018-01-03 21:29:08"</span>,
                    "<span class="hljs-attr">variations</span>": [
                        {
                            "<span class="hljs-attr">id</span>": <span class="hljs-number">1</span>,
                            "<span class="hljs-attr">name</span>": <span class="hljs-string">"DUMMY"</span>,
                            "<span class="hljs-attr">product_id</span>": <span class="hljs-number">1</span>,
                            "<span class="hljs-attr">sub_sku</span>": <span class="hljs-string">"AS0001"</span>,
                            "<span class="hljs-attr">product_variation_id</span>": <span class="hljs-number">1</span>,
                            "<span class="hljs-attr">woocommerce_variation_id</span>": <span class="hljs-literal">null</span>,
                            "<span class="hljs-attr">variation_value_id</span>": <span class="hljs-literal">null</span>,
                            "<span class="hljs-attr">default_purchase_price</span>": <span class="hljs-string">"130.0000"</span>,
                            "<span class="hljs-attr">dpp_inc_tax</span>": <span class="hljs-string">"143.0000"</span>,
                            "<span class="hljs-attr">profit_percent</span>": <span class="hljs-string">"0.0000"</span>,
                            "<span class="hljs-attr">default_sell_price</span>": <span class="hljs-string">"130.0000"</span>,
                            "<span class="hljs-attr">sell_price_inc_tax</span>": <span class="hljs-string">"143.0000"</span>,
                            "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2018-01-03 21:29:08"</span>,
                            "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2020-06-09 00:23:22"</span>,
                            "<span class="hljs-attr">deleted_at</span>": <span class="hljs-literal">null</span>,
                            "<span class="hljs-attr">combo_variations</span>": <span class="hljs-literal">null</span>,
                            "<span class="hljs-attr">variation_location_details</span>": [
                                {
                                    "<span class="hljs-attr">id</span>": <span class="hljs-number">56</span>,
                                    "<span class="hljs-attr">product_id</span>": <span class="hljs-number">1</span>,
                                    "<span class="hljs-attr">product_variation_id</span>": <span class="hljs-number">1</span>,
                                    "<span class="hljs-attr">variation_id</span>": <span class="hljs-number">1</span>,
                                    "<span class="hljs-attr">location_id</span>": <span class="hljs-number">1</span>,
                                    "<span class="hljs-attr">qty_available</span>": <span class="hljs-string">"20.0000"</span>,
                                    "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2020-06-08 23:46:40"</span>,
                                    "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2020-06-08 23:46:40"</span>
                                }
                            ],
                            "<span class="hljs-attr">media</span>": [
                                {
                                    "<span class="hljs-attr">id</span>": <span class="hljs-number">1</span>,
                                    "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
                                    "<span class="hljs-attr">file_name</span>": <span class="hljs-string">"1591686466_978227300_nn.jpeg"</span>,
                                    "<span class="hljs-attr">description</span>": <span class="hljs-literal">null</span>,
                                    "<span class="hljs-attr">uploaded_by</span>": <span class="hljs-number">9</span>,
                                    "<span class="hljs-attr">model_type</span>": <span class="hljs-string">"App\\Variation"</span>,
                                    "<span class="hljs-attr">woocommerce_media_id</span>": <span class="hljs-literal">null</span>,
                                    "<span class="hljs-attr">model_id</span>": <span class="hljs-number">1</span>,
                                    "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2020-06-09 00:07:46"</span>,
                                    "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2020-06-09 00:07:46"</span>,
                                    "<span class="hljs-attr">display_name</span>": <span class="hljs-string">"nn.jpeg"</span>,
                                    "<span class="hljs-attr">display_url</span>": <span class="hljs-string">"http:\/\/local.pos.com\/uploads\/media\/1591686466_978227300_nn.jpeg"</span>
                                }
                            ],
                            "<span class="hljs-attr">selling_price_group</span>": [
                                {
                                    "<span class="hljs-attr">id</span>": <span class="hljs-number">2</span>,
                                    "<span class="hljs-attr">variation_id</span>": <span class="hljs-number">1</span>,
                                    "<span class="hljs-attr">price_group_id</span>": <span class="hljs-number">1</span>,
                                    "<span class="hljs-attr">price_inc_tax</span>": <span class="hljs-string">"140.0000"</span>,
                                    "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2020-06-09 00:23:31"</span>,
                                    "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2020-06-09 00:23:31"</span>
                                }
                            ]
                        }
                    ]
                }
            ],
            "<span class="hljs-attr">brand</span>": {
                "<span class="hljs-attr">id</span>": <span class="hljs-number">1</span>,
                "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
                "<span class="hljs-attr">name</span>": <span class="hljs-string">"Levis"</span>,
                "<span class="hljs-attr">description</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">created_by</span>": <span class="hljs-number">1</span>,
                "<span class="hljs-attr">deleted_at</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2018-01-03 21:19:47"</span>,
                "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2018-01-03 21:19:47"</span>
            },
            "<span class="hljs-attr">unit</span>": {
                "<span class="hljs-attr">id</span>": <span class="hljs-number">1</span>,
                "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
                "<span class="hljs-attr">actual_name</span>": <span class="hljs-string">"Pieces"</span>,
                "<span class="hljs-attr">short_name</span>": <span class="hljs-string">"Pc(s)"</span>,
                "<span class="hljs-attr">allow_decimal</span>": <span class="hljs-number">0</span>,
                "<span class="hljs-attr">base_unit_id</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">base_unit_multiplier</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">created_by</span>": <span class="hljs-number">1</span>,
                "<span class="hljs-attr">deleted_at</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2018-01-03 15:15:20"</span>,
                "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2018-01-03 15:15:20"</span>
            },
            "<span class="hljs-attr">category</span>": {
                "<span class="hljs-attr">id</span>": <span class="hljs-number">1</span>,
                "<span class="hljs-attr">name</span>": <span class="hljs-string">"Men's"</span>,
                "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
                "<span class="hljs-attr">short_code</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">parent_id</span>": <span class="hljs-number">0</span>,
                "<span class="hljs-attr">created_by</span>": <span class="hljs-number">1</span>,
                "<span class="hljs-attr">category_type</span>": <span class="hljs-string">"product"</span>,
                "<span class="hljs-attr">description</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">slug</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">woocommerce_cat_id</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">deleted_at</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2018-01-03 21:06:34"</span>,
                "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2018-01-03 21:06:34"</span>
            },
            "<span class="hljs-attr">sub_category</span>": {
                "<span class="hljs-attr">id</span>": <span class="hljs-number">5</span>,
                "<span class="hljs-attr">name</span>": <span class="hljs-string">"Shirts"</span>,
                "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
                "<span class="hljs-attr">short_code</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">parent_id</span>": <span class="hljs-number">1</span>,
                "<span class="hljs-attr">created_by</span>": <span class="hljs-number">1</span>,
                "<span class="hljs-attr">category_type</span>": <span class="hljs-string">"product"</span>,
                "<span class="hljs-attr">description</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">slug</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">woocommerce_cat_id</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">deleted_at</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2018-01-03 21:08:18"</span>,
                "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2018-01-03 21:08:18"</span>
            },
            "<span class="hljs-attr">product_tax</span>": {
                "<span class="hljs-attr">id</span>": <span class="hljs-number">1</span>,
                "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
                "<span class="hljs-attr">name</span>": <span class="hljs-string">"VAT@10%"</span>,
                "<span class="hljs-attr">amount</span>": <span class="hljs-number">10</span>,
                "<span class="hljs-attr">is_tax_group</span>": <span class="hljs-number">0</span>,
                "<span class="hljs-attr">created_by</span>": <span class="hljs-number">1</span>,
                "<span class="hljs-attr">woocommerce_tax_rate_id</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">deleted_at</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2018-01-04 02:40:07"</span>,
                "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2018-01-04 02:40:07"</span>
            },
            "<span class="hljs-attr">product_locations</span>": [
                {
                    "<span class="hljs-attr">id</span>": <span class="hljs-number">1</span>,
                    "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
                    "<span class="hljs-attr">location_id</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">name</span>": <span class="hljs-string">"Awesome Shop"</span>,
                    "<span class="hljs-attr">landmark</span>": <span class="hljs-string">"Linking Street"</span>,
                    "<span class="hljs-attr">country</span>": <span class="hljs-string">"USA"</span>,
                    "<span class="hljs-attr">state</span>": <span class="hljs-string">"Arizona"</span>,
                    "<span class="hljs-attr">city</span>": <span class="hljs-string">"Phoenix"</span>,
                    "<span class="hljs-attr">zip_code</span>": <span class="hljs-string">"85001"</span>,
                    "<span class="hljs-attr">invoice_scheme_id</span>": <span class="hljs-number">1</span>,
                    "<span class="hljs-attr">invoice_layout_id</span>": <span class="hljs-number">1</span>,
                    "<span class="hljs-attr">selling_price_group_id</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">print_receipt_on_invoice</span>": <span class="hljs-number">1</span>,
                    "<span class="hljs-attr">receipt_printer_type</span>": <span class="hljs-string">"browser"</span>,
                    "<span class="hljs-attr">printer_id</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">mobile</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">alternate_number</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">email</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">website</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">featured_products</span>": [
                        <span class="hljs-string">"5"</span>,
                        <span class="hljs-string">"71"</span>
                    ],
                    "<span class="hljs-attr">is_active</span>": <span class="hljs-number">1</span>,
                    "<span class="hljs-attr">default_payment_accounts</span>": <span class="hljs-string">"{\"cash\":{\"is_enabled\":\"1\",\"account\":\"1\"},\"card\":{\"is_enabled\":\"1\",\"account\":\"3\"},\"cheque\":{\"is_enabled\":\"1\",\"account\":\"2\"},\"bank_transfer\":{\"is_enabled\":\"1\",\"account\":\"1\"},\"other\":{\"is_enabled\":\"1\",\"account\":\"3\"},\"custom_pay_1\":{\"is_enabled\":\"1\",\"account\":\"1\"},\"custom_pay_2\":{\"is_enabled\":\"1\",\"account\":\"2\"},\"custom_pay_3\":{\"is_enabled\":\"1\",\"account\":\"3\"}}"</span>,
                    "<span class="hljs-attr">custom_field1</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">custom_field2</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">custom_field3</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">custom_field4</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">deleted_at</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2018-01-04 02:15:20"</span>,
                    "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2020-06-09 01:07:05"</span>,
                    "<span class="hljs-attr">pivot</span>": {
                        "<span class="hljs-attr">product_id</span>": <span class="hljs-number">2</span>,
                        "<span class="hljs-attr">location_id</span>": <span class="hljs-number">1</span>
                    }
                }
            ]
        }
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET connector/api/product/{product}</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>product</code></td>
<td>required</td>
<td>comma separated ids of products</td>
</tr>
</tbody>
</table>
<h4>Query Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>selling_price_group</code></td>
<td>optional</td>
<td>(1, 0)</td>
</tr>
</tbody>
</table>
<!-- END_3bba79ec6b433bb13818ff41ac1d70e6 -->
<!-- START_950940377acf79b12c3e6aa18d408e53 -->
<div name="list-selling-price-group" data-unique="list-selling-price-group"></div><h2 id="list-selling-price-group">List Selling Price Group</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre style="display: block;"><code class="language-bash hljs">curl -X GET \
    -G <span class="hljs-string">"https://app.azhasoft.com/connector/api/selling-price-group"</span> \
    -H <span class="hljs-string">"Content-Type: application/json"</span> \
    -H <span class="hljs-string">"Accept: application/json"</span> \
    -H <span class="hljs-string">"Authorization: Bearer {token}"</span></code></pre>
<pre style="display: none;"><code class="language-javascript hljs"><span class="hljs-keyword">const</span> url = <span class="hljs-keyword">new</span> URL(
    <span class="hljs-string">"https://app.azhasoft.com/connector/api/selling-price-group"</span>
);

<span class="hljs-keyword">let</span> headers = {
    <span class="hljs-string">"Content-Type"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Accept"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Authorization"</span>: <span class="hljs-string">"Bearer {token}"</span>,
};

fetch(url, {
    method: <span class="hljs-string">"GET"</span>,
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; <span class="hljs-built_in">console</span>.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json hljs">{
    "<span class="hljs-attr">data</span>": [
        {
            "<span class="hljs-attr">id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">name</span>": <span class="hljs-string">"Retail"</span>,
            "<span class="hljs-attr">description</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">is_active</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">deleted_at</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2020-10-21 04:30:06"</span>,
            "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2020-11-16 18:23:15"</span>
        },
        {
            "<span class="hljs-attr">id</span>": <span class="hljs-number">2</span>,
            "<span class="hljs-attr">name</span>": <span class="hljs-string">"Wholesale"</span>,
            "<span class="hljs-attr">description</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">is_active</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">deleted_at</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2020-10-21 04:30:21"</span>,
            "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2020-11-16 18:23:00"</span>
        }
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET connector/api/selling-price-group</code></p>
<!-- END_950940377acf79b12c3e6aa18d408e53 -->
<!-- START_fa45d1ff85298b2a572b3ac163f32c0a -->
<div name="list-variations" data-unique="list-variations"></div><h2 id="list-variations">List Variations</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre style="display: block;"><code class="language-bash hljs">curl -X GET \
    -G <span class="hljs-string">"https://app.azhasoft.com/connector/api/variation/?brand_id=beatae&amp;category_id=porro&amp;sub_category_id=non&amp;not_for_selling=magni&amp;name=rerum&amp;sku=enim&amp;per_page=10"</span> \
    -H <span class="hljs-string">"Content-Type: application/json"</span> \
    -H <span class="hljs-string">"Accept: application/json"</span> \
    -H <span class="hljs-string">"Authorization: Bearer {token}"</span></code></pre>
<pre style="display: none;"><code class="language-javascript hljs"><span class="hljs-keyword">const</span> url = <span class="hljs-keyword">new</span> URL(
    <span class="hljs-string">"https://app.azhasoft.com/connector/api/variation/"</span>
);

<span class="hljs-keyword">let</span> params = {
    <span class="hljs-string">"brand_id"</span>: <span class="hljs-string">"beatae"</span>,
    <span class="hljs-string">"category_id"</span>: <span class="hljs-string">"porro"</span>,
    <span class="hljs-string">"sub_category_id"</span>: <span class="hljs-string">"non"</span>,
    <span class="hljs-string">"not_for_selling"</span>: <span class="hljs-string">"magni"</span>,
    <span class="hljs-string">"name"</span>: <span class="hljs-string">"rerum"</span>,
    <span class="hljs-string">"sku"</span>: <span class="hljs-string">"enim"</span>,
    <span class="hljs-string">"per_page"</span>: <span class="hljs-string">"10"</span>,
};
<span class="hljs-built_in">Object</span>.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

<span class="hljs-keyword">let</span> headers = {
    <span class="hljs-string">"Content-Type"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Accept"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Authorization"</span>: <span class="hljs-string">"Bearer {token}"</span>,
};

fetch(url, {
    method: <span class="hljs-string">"GET"</span>,
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; <span class="hljs-built_in">console</span>.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json hljs">{
    "<span class="hljs-attr">data</span>": [
        {
            "<span class="hljs-attr">variation_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">variation_name</span>": <span class="hljs-string">""</span>,
            "<span class="hljs-attr">sub_sku</span>": <span class="hljs-string">"AS0001"</span>,
            "<span class="hljs-attr">product_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">product_name</span>": <span class="hljs-string">"Men's Reverse Fleece Crew"</span>,
            "<span class="hljs-attr">sku</span>": <span class="hljs-string">"AS0001"</span>,
            "<span class="hljs-attr">type</span>": <span class="hljs-string">"single"</span>,
            "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">barcode_type</span>": <span class="hljs-string">"C128"</span>,
            "<span class="hljs-attr">expiry_period</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">expiry_period_type</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">enable_sr_no</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">weight</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">product_custom_field1</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">product_custom_field2</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">product_custom_field3</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">product_custom_field4</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">product_image</span>": <span class="hljs-string">"1528728059_fleece_crew.jpg"</span>,
            "<span class="hljs-attr">product_description</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">warranty_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">brand_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">brand_name</span>": <span class="hljs-string">"Levis"</span>,
            "<span class="hljs-attr">unit_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">enable_stock</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">not_for_selling</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">unit_name</span>": <span class="hljs-string">"Pc(s)"</span>,
            "<span class="hljs-attr">unit_allow_decimal</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">category_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">category</span>": <span class="hljs-string">"Men's"</span>,
            "<span class="hljs-attr">sub_category_id</span>": <span class="hljs-number">5</span>,
            "<span class="hljs-attr">sub_category</span>": <span class="hljs-string">"Shirts"</span>,
            "<span class="hljs-attr">tax_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">tax_type</span>": <span class="hljs-string">"exclusive"</span>,
            "<span class="hljs-attr">tax_name</span>": <span class="hljs-string">"VAT@10%"</span>,
            "<span class="hljs-attr">tax_amount</span>": <span class="hljs-number">10</span>,
            "<span class="hljs-attr">product_variation_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">default_purchase_price</span>": <span class="hljs-string">"130.0000"</span>,
            "<span class="hljs-attr">dpp_inc_tax</span>": <span class="hljs-string">"143.0000"</span>,
            "<span class="hljs-attr">profit_percent</span>": <span class="hljs-string">"0.0000"</span>,
            "<span class="hljs-attr">default_sell_price</span>": <span class="hljs-string">"130.0000"</span>,
            "<span class="hljs-attr">sell_price_inc_tax</span>": <span class="hljs-string">"143.0000"</span>,
            "<span class="hljs-attr">product_variation_name</span>": <span class="hljs-string">""</span>,
            "<span class="hljs-attr">variation_location_details</span>": [],
            "<span class="hljs-attr">media</span>": [],
            "<span class="hljs-attr">selling_price_group</span>": [],
            "<span class="hljs-attr">product_image_url</span>": <span class="hljs-string">"http:\/\/local.pos.com\/uploads\/img\/1528728059_fleece_crew.jpg"</span>,
            "<span class="hljs-attr">product_locations</span>": [
                {
                    "<span class="hljs-attr">id</span>": <span class="hljs-number">1</span>,
                    "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
                    "<span class="hljs-attr">location_id</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">name</span>": <span class="hljs-string">"Awesome Shop"</span>,
                    "<span class="hljs-attr">landmark</span>": <span class="hljs-string">"Linking Street"</span>,
                    "<span class="hljs-attr">country</span>": <span class="hljs-string">"USA"</span>,
                    "<span class="hljs-attr">state</span>": <span class="hljs-string">"Arizona"</span>,
                    "<span class="hljs-attr">city</span>": <span class="hljs-string">"Phoenix"</span>,
                    "<span class="hljs-attr">zip_code</span>": <span class="hljs-string">"85001"</span>,
                    "<span class="hljs-attr">invoice_scheme_id</span>": <span class="hljs-number">1</span>,
                    "<span class="hljs-attr">invoice_layout_id</span>": <span class="hljs-number">1</span>,
                    "<span class="hljs-attr">selling_price_group_id</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">print_receipt_on_invoice</span>": <span class="hljs-number">1</span>,
                    "<span class="hljs-attr">receipt_printer_type</span>": <span class="hljs-string">"browser"</span>,
                    "<span class="hljs-attr">printer_id</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">mobile</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">alternate_number</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">email</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">website</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">featured_products</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">is_active</span>": <span class="hljs-number">1</span>,
                    "<span class="hljs-attr">default_payment_accounts</span>": <span class="hljs-string">""</span>,
                    "<span class="hljs-attr">custom_field1</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">custom_field2</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">custom_field3</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">custom_field4</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">deleted_at</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2018-01-04 02:15:20"</span>,
                    "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2019-12-11 04:53:39"</span>,
                    "<span class="hljs-attr">pivot</span>": {
                        "<span class="hljs-attr">product_id</span>": <span class="hljs-number">1</span>,
                        "<span class="hljs-attr">location_id</span>": <span class="hljs-number">1</span>
                    }
                }
            ]
        },
        {
            "<span class="hljs-attr">variation_id</span>": <span class="hljs-number">2</span>,
            "<span class="hljs-attr">variation_name</span>": <span class="hljs-string">"28"</span>,
            "<span class="hljs-attr">sub_sku</span>": <span class="hljs-string">"AS0002-1"</span>,
            "<span class="hljs-attr">product_id</span>": <span class="hljs-number">2</span>,
            "<span class="hljs-attr">product_name</span>": <span class="hljs-string">"Levis Men's Slimmy Fit Jeans"</span>,
            "<span class="hljs-attr">sku</span>": <span class="hljs-string">"AS0002"</span>,
            "<span class="hljs-attr">type</span>": <span class="hljs-string">"variable"</span>,
            "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">barcode_type</span>": <span class="hljs-string">"C128"</span>,
            "<span class="hljs-attr">expiry_period</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">expiry_period_type</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">enable_sr_no</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">weight</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">product_custom_field1</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">product_custom_field2</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">product_custom_field3</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">product_custom_field4</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">product_image</span>": <span class="hljs-string">"1528727964_levis_jeans.jpg"</span>,
            "<span class="hljs-attr">product_description</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">warranty_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">brand_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">brand_name</span>": <span class="hljs-string">"Levis"</span>,
            "<span class="hljs-attr">unit_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">enable_stock</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">not_for_selling</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">unit_name</span>": <span class="hljs-string">"Pc(s)"</span>,
            "<span class="hljs-attr">unit_allow_decimal</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">category_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">category</span>": <span class="hljs-string">"Men's"</span>,
            "<span class="hljs-attr">sub_category_id</span>": <span class="hljs-number">4</span>,
            "<span class="hljs-attr">sub_category</span>": <span class="hljs-string">"Jeans"</span>,
            "<span class="hljs-attr">tax_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">tax_type</span>": <span class="hljs-string">"exclusive"</span>,
            "<span class="hljs-attr">tax_name</span>": <span class="hljs-string">"VAT@10%"</span>,
            "<span class="hljs-attr">tax_amount</span>": <span class="hljs-number">10</span>,
            "<span class="hljs-attr">product_variation_id</span>": <span class="hljs-number">2</span>,
            "<span class="hljs-attr">default_purchase_price</span>": <span class="hljs-string">"70.0000"</span>,
            "<span class="hljs-attr">dpp_inc_tax</span>": <span class="hljs-string">"77.0000"</span>,
            "<span class="hljs-attr">profit_percent</span>": <span class="hljs-string">"0.0000"</span>,
            "<span class="hljs-attr">default_sell_price</span>": <span class="hljs-string">"70.0000"</span>,
            "<span class="hljs-attr">sell_price_inc_tax</span>": <span class="hljs-string">"77.0000"</span>,
            "<span class="hljs-attr">product_variation_name</span>": <span class="hljs-string">"Waist Size"</span>,
            "<span class="hljs-attr">variation_location_details</span>": [
                {
                    "<span class="hljs-attr">id</span>": <span class="hljs-number">1</span>,
                    "<span class="hljs-attr">product_id</span>": <span class="hljs-number">2</span>,
                    "<span class="hljs-attr">product_variation_id</span>": <span class="hljs-number">2</span>,
                    "<span class="hljs-attr">variation_id</span>": <span class="hljs-number">2</span>,
                    "<span class="hljs-attr">location_id</span>": <span class="hljs-number">1</span>,
                    "<span class="hljs-attr">qty_available</span>": <span class="hljs-string">"50.0000"</span>,
                    "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2018-01-06 06:57:11"</span>,
                    "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2020-08-04 04:11:27"</span>
                }
            ],
            "<span class="hljs-attr">media</span>": [
                {
                    "<span class="hljs-attr">id</span>": <span class="hljs-number">1</span>,
                    "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
                    "<span class="hljs-attr">file_name</span>": <span class="hljs-string">"1596701997_743693452_test.jpg"</span>,
                    "<span class="hljs-attr">description</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">uploaded_by</span>": <span class="hljs-number">9</span>,
                    "<span class="hljs-attr">model_type</span>": <span class="hljs-string">"App\\Variation"</span>,
                    "<span class="hljs-attr">woocommerce_media_id</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">model_id</span>": <span class="hljs-number">2</span>,
                    "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2020-08-06 13:49:57"</span>,
                    "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2020-08-06 13:49:57"</span>,
                    "<span class="hljs-attr">display_name</span>": <span class="hljs-string">"test.jpg"</span>,
                    "<span class="hljs-attr">display_url</span>": <span class="hljs-string">"http:\/\/local.pos.com\/uploads\/media\/1596701997_743693452_test.jpg"</span>
                }
            ],
            "<span class="hljs-attr">selling_price_group</span>": [],
            "<span class="hljs-attr">product_image_url</span>": <span class="hljs-string">"http:\/\/local.pos.com\/uploads\/img\/1528727964_levis_jeans.jpg"</span>,
            "<span class="hljs-attr">product_locations</span>": [
                {
                    "<span class="hljs-attr">id</span>": <span class="hljs-number">1</span>,
                    "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
                    "<span class="hljs-attr">location_id</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">name</span>": <span class="hljs-string">"Awesome Shop"</span>,
                    "<span class="hljs-attr">landmark</span>": <span class="hljs-string">"Linking Street"</span>,
                    "<span class="hljs-attr">country</span>": <span class="hljs-string">"USA"</span>,
                    "<span class="hljs-attr">state</span>": <span class="hljs-string">"Arizona"</span>,
                    "<span class="hljs-attr">city</span>": <span class="hljs-string">"Phoenix"</span>,
                    "<span class="hljs-attr">zip_code</span>": <span class="hljs-string">"85001"</span>,
                    "<span class="hljs-attr">invoice_scheme_id</span>": <span class="hljs-number">1</span>,
                    "<span class="hljs-attr">invoice_layout_id</span>": <span class="hljs-number">1</span>,
                    "<span class="hljs-attr">selling_price_group_id</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">print_receipt_on_invoice</span>": <span class="hljs-number">1</span>,
                    "<span class="hljs-attr">receipt_printer_type</span>": <span class="hljs-string">"browser"</span>,
                    "<span class="hljs-attr">printer_id</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">mobile</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">alternate_number</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">email</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">website</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">featured_products</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">is_active</span>": <span class="hljs-number">1</span>,
                    "<span class="hljs-attr">default_payment_accounts</span>": <span class="hljs-string">""</span>,
                    "<span class="hljs-attr">custom_field1</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">custom_field2</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">custom_field3</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">custom_field4</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">deleted_at</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2018-01-04 02:15:20"</span>,
                    "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2019-12-11 04:53:39"</span>,
                    "<span class="hljs-attr">pivot</span>": {
                        "<span class="hljs-attr">product_id</span>": <span class="hljs-number">2</span>,
                        "<span class="hljs-attr">location_id</span>": <span class="hljs-number">1</span>
                    }
                }
            ]
        }
    ],
    "<span class="hljs-attr">links</span>": {
        "<span class="hljs-attr">first</span>": <span class="hljs-string">"http:\/\/local.pos.com\/connector\/api\/variation?page=1"</span>,
        "<span class="hljs-attr">last</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">prev</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">next</span>": <span class="hljs-string">"http:\/\/local.pos.com\/connector\/api\/variation?page=2"</span>
    },
    "<span class="hljs-attr">meta</span>": {
        "<span class="hljs-attr">current_page</span>": <span class="hljs-number">1</span>,
        "<span class="hljs-attr">from</span>": <span class="hljs-number">1</span>,
        "<span class="hljs-attr">path</span>": <span class="hljs-string">"http:\/\/local.pos.com\/connector\/api\/variation"</span>,
        "<span class="hljs-attr">per_page</span>": <span class="hljs-string">"2"</span>,
        "<span class="hljs-attr">to</span>": <span class="hljs-number">2</span>
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET connector/api/variation/{id?}</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>product</code></td>
<td>optional</td>
<td>comma separated ids of variations</td>
</tr>
</tbody>
</table>
<h4>Query Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>brand_id</code></td>
<td>optional</td>
</tr>
<tr>
<td><code>category_id</code></td>
<td>optional</td>
</tr>
<tr>
<td><code>sub_category_id</code></td>
<td>optional</td>
</tr>
<tr>
<td><code>not_for_selling</code></td>
<td>optional</td>
<td>Values: 0 or 1</td>
</tr>
<tr>
<td><code>name</code></td>
<td>optional</td>
<td>Search term for product name</td>
</tr>
<tr>
<td><code>sku</code></td>
<td>optional</td>
<td>Search term for product sku</td>
</tr>
<tr>
<td><code>per_page</code></td>
<td>optional</td>
<td>Total records per page. default: 10, Set -1 for no pagination</td>
</tr>
</tbody>
</table>
<!-- END_fa45d1ff85298b2a572b3ac163f32c0a -->
<div name="sales-management" data-unique="sales-management"></div><h1 id="sales-management">Sales management</h1>
<!-- START_7ff3a37eb4717090fde5a1e26a7e3d4a -->
<div name="list-sells" data-unique="list-sells"></div><h2 id="list-sells">List sells</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre style="display: block;"><code class="language-bash hljs">curl -X GET \
    -G <span class="hljs-string">"https://app.azhasoft.com/connector/api/sell?location_id=deserunt&amp;contact_id=ex&amp;payment_status=paid&amp;start_date=2018-06-25&amp;end_date=2018-06-25&amp;user_id=voluptatem&amp;service_staff_id=dolores&amp;shipping_status=ordered&amp;only_subscriptions=unde&amp;per_page=10"</span> \
    -H <span class="hljs-string">"Content-Type: application/json"</span> \
    -H <span class="hljs-string">"Accept: application/json"</span> \
    -H <span class="hljs-string">"Authorization: Bearer {token}"</span></code></pre>
<pre style="display: none;"><code class="language-javascript hljs"><span class="hljs-keyword">const</span> url = <span class="hljs-keyword">new</span> URL(
    <span class="hljs-string">"https://app.azhasoft.com/connector/api/sell"</span>
);

<span class="hljs-keyword">let</span> params = {
    <span class="hljs-string">"location_id"</span>: <span class="hljs-string">"deserunt"</span>,
    <span class="hljs-string">"contact_id"</span>: <span class="hljs-string">"ex"</span>,
    <span class="hljs-string">"payment_status"</span>: <span class="hljs-string">"paid"</span>,
    <span class="hljs-string">"start_date"</span>: <span class="hljs-string">"2018-06-25"</span>,
    <span class="hljs-string">"end_date"</span>: <span class="hljs-string">"2018-06-25"</span>,
    <span class="hljs-string">"user_id"</span>: <span class="hljs-string">"voluptatem"</span>,
    <span class="hljs-string">"service_staff_id"</span>: <span class="hljs-string">"dolores"</span>,
    <span class="hljs-string">"shipping_status"</span>: <span class="hljs-string">"ordered"</span>,
    <span class="hljs-string">"only_subscriptions"</span>: <span class="hljs-string">"unde"</span>,
    <span class="hljs-string">"per_page"</span>: <span class="hljs-string">"10"</span>,
};
<span class="hljs-built_in">Object</span>.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

<span class="hljs-keyword">let</span> headers = {
    <span class="hljs-string">"Content-Type"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Accept"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Authorization"</span>: <span class="hljs-string">"Bearer {token}"</span>,
};

fetch(url, {
    method: <span class="hljs-string">"GET"</span>,
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; <span class="hljs-built_in">console</span>.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json hljs">{
    "<span class="hljs-attr">data</span>": [
        {
            "<span class="hljs-attr">id</span>": <span class="hljs-number">6</span>,
            "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">location_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">res_table_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">res_waiter_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">res_order_status</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">type</span>": <span class="hljs-string">"sell"</span>,
            "<span class="hljs-attr">sub_type</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">status</span>": <span class="hljs-string">"final"</span>,
            "<span class="hljs-attr">is_quotation</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">payment_status</span>": <span class="hljs-string">"paid"</span>,
            "<span class="hljs-attr">adjustment_type</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">contact_id</span>": <span class="hljs-number">4</span>,
            "<span class="hljs-attr">customer_group_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">invoice_no</span>": <span class="hljs-string">"AS0001"</span>,
            "<span class="hljs-attr">ref_no</span>": <span class="hljs-string">""</span>,
            "<span class="hljs-attr">subscription_no</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">subscription_repeat_on</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">transaction_date</span>": <span class="hljs-string">"2018-04-10 13:23:21"</span>,
            "<span class="hljs-attr">total_before_tax</span>": <span class="hljs-string">"770.0000"</span>,
            "<span class="hljs-attr">tax_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">tax_amount</span>": <span class="hljs-string">"0.0000"</span>,
            "<span class="hljs-attr">discount_type</span>": <span class="hljs-string">"percentage"</span>,
            "<span class="hljs-attr">discount_amount</span>": <span class="hljs-string">"0.0000"</span>,
            "<span class="hljs-attr">rp_redeemed</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">rp_redeemed_amount</span>": <span class="hljs-string">"0.0000"</span>,
            "<span class="hljs-attr">shipping_details</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">shipping_address</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">shipping_status</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">delivered_to</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">shipping_charges</span>": <span class="hljs-string">"0.0000"</span>,
            "<span class="hljs-attr">additional_notes</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">staff_note</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">round_off_amount</span>": <span class="hljs-string">"0.0000"</span>,
            "<span class="hljs-attr">final_total</span>": <span class="hljs-string">"770.0000"</span>,
            "<span class="hljs-attr">expense_category_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">expense_for</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">commission_agent</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">document</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">is_direct_sale</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">is_suspend</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">exchange_rate</span>": <span class="hljs-string">"1.000"</span>,
            "<span class="hljs-attr">total_amount_recovered</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">transfer_parent_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">return_parent_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">opening_stock_product_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">created_by</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">import_batch</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">import_time</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">types_of_service_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">packing_charge</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">packing_charge_type</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">service_custom_field_1</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">service_custom_field_2</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">service_custom_field_3</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">service_custom_field_4</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">mfg_parent_production_purchase_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">mfg_wasted_units</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">mfg_production_cost</span>": <span class="hljs-string">"0.0000"</span>,
            "<span class="hljs-attr">mfg_is_final</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">is_created_from_api</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">essentials_duration</span>": <span class="hljs-string">"0.00"</span>,
            "<span class="hljs-attr">essentials_duration_unit</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">essentials_amount_per_unit_duration</span>": <span class="hljs-string">"0.0000"</span>,
            "<span class="hljs-attr">essentials_allowances</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">essentials_deductions</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">rp_earned</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">repair_completed_on</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">repair_warranty_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">repair_brand_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">repair_status_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">repair_model_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">repair_defects</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">repair_serial_no</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">repair_updates_email</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">repair_updates_sms</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">repair_checklist</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">repair_security_pwd</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">repair_security_pattern</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">repair_due_date</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">repair_device_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">order_addresses</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">is_recurring</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">recur_interval</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">recur_interval_type</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">recur_repetitions</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">recur_stopped_on</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">recur_parent_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">invoice_token</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">pay_term_number</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">pay_term_type</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">pjt_project_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">pjt_title</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">woocommerce_order_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">selling_price_group_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2018-01-06 07:06:11"</span>,
            "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2018-01-06 07:06:11"</span>,
            "<span class="hljs-attr">sell_lines</span>": [
                {
                    "<span class="hljs-attr">id</span>": <span class="hljs-number">1</span>,
                    "<span class="hljs-attr">transaction_id</span>": <span class="hljs-number">6</span>,
                    "<span class="hljs-attr">product_id</span>": <span class="hljs-number">2</span>,
                    "<span class="hljs-attr">variation_id</span>": <span class="hljs-number">3</span>,
                    "<span class="hljs-attr">quantity</span>": <span class="hljs-number">10</span>,
                    "<span class="hljs-attr">mfg_waste_percent</span>": <span class="hljs-string">"0.0000"</span>,
                    "<span class="hljs-attr">quantity_returned</span>": <span class="hljs-string">"0.0000"</span>,
                    "<span class="hljs-attr">unit_price_before_discount</span>": <span class="hljs-string">"70.0000"</span>,
                    "<span class="hljs-attr">unit_price</span>": <span class="hljs-string">"70.0000"</span>,
                    "<span class="hljs-attr">line_discount_type</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">line_discount_amount</span>": <span class="hljs-string">"0.0000"</span>,
                    "<span class="hljs-attr">unit_price_inc_tax</span>": <span class="hljs-string">"77.0000"</span>,
                    "<span class="hljs-attr">item_tax</span>": <span class="hljs-string">"7.0000"</span>,
                    "<span class="hljs-attr">tax_id</span>": <span class="hljs-number">1</span>,
                    "<span class="hljs-attr">discount_id</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">lot_no_line_id</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">sell_line_note</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">res_service_staff_id</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">res_line_order_status</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">woocommerce_line_items_id</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">parent_sell_line_id</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">children_type</span>": <span class="hljs-string">""</span>,
                    "<span class="hljs-attr">sub_unit_id</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2018-01-06 07:06:11"</span>,
                    "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2018-01-06 07:06:11"</span>
                }
            ],
            "<span class="hljs-attr">payment_lines</span>": [
                {
                    "<span class="hljs-attr">id</span>": <span class="hljs-number">1</span>,
                    "<span class="hljs-attr">transaction_id</span>": <span class="hljs-number">6</span>,
                    "<span class="hljs-attr">business_id</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">is_return</span>": <span class="hljs-number">0</span>,
                    "<span class="hljs-attr">amount</span>": <span class="hljs-string">"770.0000"</span>,
                    "<span class="hljs-attr">method</span>": <span class="hljs-string">"cash"</span>,
                    "<span class="hljs-attr">transaction_no</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">card_transaction_number</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">card_number</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">card_type</span>": <span class="hljs-string">"visa"</span>,
                    "<span class="hljs-attr">card_holder_name</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">card_month</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">card_year</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">card_security</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">cheque_number</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">bank_account_number</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">paid_on</span>": <span class="hljs-string">"2018-01-09 17:30:35"</span>,
                    "<span class="hljs-attr">created_by</span>": <span class="hljs-number">1</span>,
                    "<span class="hljs-attr">payment_for</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">parent_id</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">note</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">document</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">payment_ref_no</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">account_id</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2018-01-06 01:36:11"</span>,
                    "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2018-01-06 01:36:11"</span>
                }
            ]
        }
    ],
    "<span class="hljs-attr">links</span>": {
        "<span class="hljs-attr">first</span>": <span class="hljs-string">"http:\/\/local.pos.com\/connector\/api\/sell?page=1"</span>,
        "<span class="hljs-attr">last</span>": <span class="hljs-string">"http:\/\/local.pos.com\/connector\/api\/sell?page=6"</span>,
        "<span class="hljs-attr">prev</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">next</span>": <span class="hljs-string">"http:\/\/local.pos.com\/connector\/api\/sell?page=2"</span>
    },
    "<span class="hljs-attr">meta</span>": {
        "<span class="hljs-attr">current_page</span>": <span class="hljs-number">1</span>,
        "<span class="hljs-attr">from</span>": <span class="hljs-number">1</span>,
        "<span class="hljs-attr">path</span>": <span class="hljs-string">"http:\/\/local.pos.com\/connector\/api\/sell"</span>,
        "<span class="hljs-attr">per_page</span>": <span class="hljs-number">10</span>,
        "<span class="hljs-attr">to</span>": <span class="hljs-number">10</span>
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET connector/api/sell</code></p>
<h4>Query Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>location_id</code></td>
<td>optional</td>
<td>id of the location</td>
</tr>
<tr>
<td><code>contact_id</code></td>
<td>optional</td>
<td>id of the customer</td>
</tr>
<tr>
<td><code>payment_status</code></td>
<td>optional</td>
<td>payment status</td>
</tr>
<tr>
<td><code>start_date</code></td>
<td>optional</td>
<td>format:Y-m-d</td>
</tr>
<tr>
<td><code>end_date</code></td>
<td>optional</td>
<td>format:Y-m-d</td>
</tr>
<tr>
<td><code>user_id</code></td>
<td>optional</td>
<td>id of the user who created the sale</td>
</tr>
<tr>
<td><code>service_staff_id</code></td>
<td>optional</td>
<td>id of the service staff assigned with the sale</td>
</tr>
<tr>
<td><code>shipping_status</code></td>
<td>optional</td>
<td>Shipping Status of the sale ('ordered', 'packed', 'shipped', 'delivered', 'cancelled')</td>
</tr>
<tr>
<td><code>only_subscriptions</code></td>
<td>optional</td>
<td>Filter only subcription invoices (1, 0)</td>
</tr>
<tr>
<td><code>per_page</code></td>
<td>optional</td>
<td>Total records per page. default: 10, Set -1 for no pagination</td>
</tr>
</tbody>
</table>
<!-- END_7ff3a37eb4717090fde5a1e26a7e3d4a -->
<!-- START_b36ef2e65db4271ba22222f5c5dce2ba -->
<div name="create-sell" data-unique="create-sell"></div><h2 id="create-sell">Create sell</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre style="display: block;"><code class="language-bash hljs">curl -X POST \
    <span class="hljs-string">"https://app.azhasoft.com/connector/api/sell"</span> \
    -H <span class="hljs-string">"Content-Type: application/json"</span> \
    -H <span class="hljs-string">"Accept: application/json"</span> \
    -H <span class="hljs-string">"Authorization: Bearer {token}"</span> \
    <span class="hljs-_">-d</span> <span class="hljs-string">'{"sells":[{"location_id":15,"contact_id":7,"transaction_date":"2020-07-22 15:48:29","invoice_no":"quaerat","status":"final","is_quotation":true,"tax_rate_id":4,"discount_amount":10,"discount_type":"fixed","sale_note":"recusandae","staff_note":"nulla","commission_agent":5,"shipping_details":"Express Delivery","shipping_address":"laboriosam","shipping_status":"ordered","delivered_to":"'</span>Mr robin<span class="hljs-string">'","shipping_charges":10,"packing_charge":10,"exchange_rate":1,"selling_price_group_id":5,"pay_term_number":3,"pay_term_type":"months","is_recurring":0,"recur_interval":3,"recur_interval_type":"months","subscription_repeat_on":15,"subscription_no":"nihil","recur_repetitions":20,"rp_redeemed":1,"rp_redeemed_amount":13.5,"types_of_service_id":13,"service_custom_field_1":"quia","service_custom_field_2":"ullam","service_custom_field_3":"distinctio","service_custom_field_4":"id","round_off_amount":639.2552,"table_id":1,"service_staff_id":1,"change_return":0,"products":[{"product_id":17,"variation_id":58,"quantity":1,"unit_price":437.5,"tax_rate_id":0,"discount_amount":0,"discount_type":"percentage","sub_unit_id":11,"note":"consectetur"}],"payments":[{"amount":453.13,"method":"cash","account_id":2,"card_number":"rerum","card_holder_name":"molestias","card_transaction_number":"est","card_type":"explicabo","card_month":"earum","card_year":"in","card_security":"corrupti","transaction_no_1":"provident","transaction_no_2":"veritatis","transaction_no_3":"dolore","bank_account_number":"suscipit","note":"doloremque","cheque_number":"voluptate"}]}]}'</span>
</code></pre>
<pre style="display: none;"><code class="language-javascript hljs"><span class="hljs-keyword">const</span> url = <span class="hljs-keyword">new</span> URL(
    <span class="hljs-string">"https://app.azhasoft.com/connector/api/sell"</span>
);

<span class="hljs-keyword">let</span> headers = {
    <span class="hljs-string">"Content-Type"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Accept"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Authorization"</span>: <span class="hljs-string">"Bearer {token}"</span>,
};

<span class="hljs-keyword">let</span> body = {
    <span class="hljs-string">"sells"</span>: [
        {
            <span class="hljs-string">"location_id"</span>: <span class="hljs-number">15</span>,
            <span class="hljs-string">"contact_id"</span>: <span class="hljs-number">7</span>,
            <span class="hljs-string">"transaction_date"</span>: <span class="hljs-string">"2020-07-22 15:48:29"</span>,
            <span class="hljs-string">"invoice_no"</span>: <span class="hljs-string">"quaerat"</span>,
            <span class="hljs-string">"status"</span>: <span class="hljs-string">"final"</span>,
            <span class="hljs-string">"is_quotation"</span>: <span class="hljs-literal">true</span>,
            <span class="hljs-string">"tax_rate_id"</span>: <span class="hljs-number">4</span>,
            <span class="hljs-string">"discount_amount"</span>: <span class="hljs-number">10</span>,
            <span class="hljs-string">"discount_type"</span>: <span class="hljs-string">"fixed"</span>,
            <span class="hljs-string">"sale_note"</span>: <span class="hljs-string">"recusandae"</span>,
            <span class="hljs-string">"staff_note"</span>: <span class="hljs-string">"nulla"</span>,
            <span class="hljs-string">"commission_agent"</span>: <span class="hljs-number">5</span>,
            <span class="hljs-string">"shipping_details"</span>: <span class="hljs-string">"Express Delivery"</span>,
            <span class="hljs-string">"shipping_address"</span>: <span class="hljs-string">"laboriosam"</span>,
            <span class="hljs-string">"shipping_status"</span>: <span class="hljs-string">"ordered"</span>,
            <span class="hljs-string">"delivered_to"</span>: <span class="hljs-string">"'Mr robin'"</span>,
            <span class="hljs-string">"shipping_charges"</span>: <span class="hljs-number">10</span>,
            <span class="hljs-string">"packing_charge"</span>: <span class="hljs-number">10</span>,
            <span class="hljs-string">"exchange_rate"</span>: <span class="hljs-number">1</span>,
            <span class="hljs-string">"selling_price_group_id"</span>: <span class="hljs-number">5</span>,
            <span class="hljs-string">"pay_term_number"</span>: <span class="hljs-number">3</span>,
            <span class="hljs-string">"pay_term_type"</span>: <span class="hljs-string">"months"</span>,
            <span class="hljs-string">"is_recurring"</span>: <span class="hljs-number">0</span>,
            <span class="hljs-string">"recur_interval"</span>: <span class="hljs-number">3</span>,
            <span class="hljs-string">"recur_interval_type"</span>: <span class="hljs-string">"months"</span>,
            <span class="hljs-string">"subscription_repeat_on"</span>: <span class="hljs-number">15</span>,
            <span class="hljs-string">"subscription_no"</span>: <span class="hljs-string">"nihil"</span>,
            <span class="hljs-string">"recur_repetitions"</span>: <span class="hljs-number">20</span>,
            <span class="hljs-string">"rp_redeemed"</span>: <span class="hljs-number">1</span>,
            <span class="hljs-string">"rp_redeemed_amount"</span>: <span class="hljs-number">13.5</span>,
            <span class="hljs-string">"types_of_service_id"</span>: <span class="hljs-number">13</span>,
            <span class="hljs-string">"service_custom_field_1"</span>: <span class="hljs-string">"quia"</span>,
            <span class="hljs-string">"service_custom_field_2"</span>: <span class="hljs-string">"ullam"</span>,
            <span class="hljs-string">"service_custom_field_3"</span>: <span class="hljs-string">"distinctio"</span>,
            <span class="hljs-string">"service_custom_field_4"</span>: <span class="hljs-string">"id"</span>,
            <span class="hljs-string">"round_off_amount"</span>: <span class="hljs-number">639.2552</span>,
            <span class="hljs-string">"table_id"</span>: <span class="hljs-number">1</span>,
            <span class="hljs-string">"service_staff_id"</span>: <span class="hljs-number">1</span>,
            <span class="hljs-string">"change_return"</span>: <span class="hljs-number">0</span>,
            <span class="hljs-string">"products"</span>: [
                {
                    <span class="hljs-string">"product_id"</span>: <span class="hljs-number">17</span>,
                    <span class="hljs-string">"variation_id"</span>: <span class="hljs-number">58</span>,
                    <span class="hljs-string">"quantity"</span>: <span class="hljs-number">1</span>,
                    <span class="hljs-string">"unit_price"</span>: <span class="hljs-number">437.5</span>,
                    <span class="hljs-string">"tax_rate_id"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-string">"discount_amount"</span>: <span class="hljs-number">0</span>,
                    <span class="hljs-string">"discount_type"</span>: <span class="hljs-string">"percentage"</span>,
                    <span class="hljs-string">"sub_unit_id"</span>: <span class="hljs-number">11</span>,
                    <span class="hljs-string">"note"</span>: <span class="hljs-string">"consectetur"</span>
                }
            ],
            <span class="hljs-string">"payments"</span>: [
                {
                    <span class="hljs-string">"amount"</span>: <span class="hljs-number">453.13</span>,
                    <span class="hljs-string">"method"</span>: <span class="hljs-string">"cash"</span>,
                    <span class="hljs-string">"account_id"</span>: <span class="hljs-number">2</span>,
                    <span class="hljs-string">"card_number"</span>: <span class="hljs-string">"rerum"</span>,
                    <span class="hljs-string">"card_holder_name"</span>: <span class="hljs-string">"molestias"</span>,
                    <span class="hljs-string">"card_transaction_number"</span>: <span class="hljs-string">"est"</span>,
                    <span class="hljs-string">"card_type"</span>: <span class="hljs-string">"explicabo"</span>,
                    <span class="hljs-string">"card_month"</span>: <span class="hljs-string">"earum"</span>,
                    <span class="hljs-string">"card_year"</span>: <span class="hljs-string">"in"</span>,
                    <span class="hljs-string">"card_security"</span>: <span class="hljs-string">"corrupti"</span>,
                    <span class="hljs-string">"transaction_no_1"</span>: <span class="hljs-string">"provident"</span>,
                    <span class="hljs-string">"transaction_no_2"</span>: <span class="hljs-string">"veritatis"</span>,
                    <span class="hljs-string">"transaction_no_3"</span>: <span class="hljs-string">"dolore"</span>,
                    <span class="hljs-string">"bank_account_number"</span>: <span class="hljs-string">"suscipit"</span>,
                    <span class="hljs-string">"note"</span>: <span class="hljs-string">"doloremque"</span>,
                    <span class="hljs-string">"cheque_number"</span>: <span class="hljs-string">"voluptate"</span>
                }
            ]
        }
    ]
}

fetch(url, {
    method: <span class="hljs-string">"POST"</span>,
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; <span class="hljs-built_in">console</span>.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json hljs">{
    "<span class="hljs-attr">data</span>": [
        {
            "<span class="hljs-attr">id</span>": <span class="hljs-number">6</span>,
            "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">location_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">res_table_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">res_waiter_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">res_order_status</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">type</span>": <span class="hljs-string">"sell"</span>,
            "<span class="hljs-attr">sub_type</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">status</span>": <span class="hljs-string">"final"</span>,
            "<span class="hljs-attr">is_quotation</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">payment_status</span>": <span class="hljs-string">"paid"</span>,
            "<span class="hljs-attr">adjustment_type</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">contact_id</span>": <span class="hljs-number">4</span>,
            "<span class="hljs-attr">customer_group_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">invoice_no</span>": <span class="hljs-string">"AS0001"</span>,
            "<span class="hljs-attr">ref_no</span>": <span class="hljs-string">""</span>,
            "<span class="hljs-attr">subscription_no</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">subscription_repeat_on</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">transaction_date</span>": <span class="hljs-string">"2018-04-10 13:23:21"</span>,
            "<span class="hljs-attr">total_before_tax</span>": <span class="hljs-string">"770.0000"</span>,
            "<span class="hljs-attr">tax_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">tax_amount</span>": <span class="hljs-string">"0.0000"</span>,
            "<span class="hljs-attr">discount_type</span>": <span class="hljs-string">"percentage"</span>,
            "<span class="hljs-attr">discount_amount</span>": <span class="hljs-string">"0.0000"</span>,
            "<span class="hljs-attr">rp_redeemed</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">rp_redeemed_amount</span>": <span class="hljs-string">"0.0000"</span>,
            "<span class="hljs-attr">shipping_details</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">shipping_address</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">shipping_status</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">delivered_to</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">shipping_charges</span>": <span class="hljs-string">"0.0000"</span>,
            "<span class="hljs-attr">additional_notes</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">staff_note</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">round_off_amount</span>": <span class="hljs-string">"0.0000"</span>,
            "<span class="hljs-attr">final_total</span>": <span class="hljs-string">"770.0000"</span>,
            "<span class="hljs-attr">expense_category_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">expense_for</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">commission_agent</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">document</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">is_direct_sale</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">is_suspend</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">exchange_rate</span>": <span class="hljs-string">"1.000"</span>,
            "<span class="hljs-attr">total_amount_recovered</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">transfer_parent_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">return_parent_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">opening_stock_product_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">created_by</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">import_batch</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">import_time</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">types_of_service_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">packing_charge</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">packing_charge_type</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">service_custom_field_1</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">service_custom_field_2</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">service_custom_field_3</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">service_custom_field_4</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">mfg_parent_production_purchase_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">mfg_wasted_units</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">mfg_production_cost</span>": <span class="hljs-string">"0.0000"</span>,
            "<span class="hljs-attr">mfg_is_final</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">is_created_from_api</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">essentials_duration</span>": <span class="hljs-string">"0.00"</span>,
            "<span class="hljs-attr">essentials_duration_unit</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">essentials_amount_per_unit_duration</span>": <span class="hljs-string">"0.0000"</span>,
            "<span class="hljs-attr">essentials_allowances</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">essentials_deductions</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">rp_earned</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">repair_completed_on</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">repair_warranty_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">repair_brand_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">repair_status_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">repair_model_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">repair_defects</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">repair_serial_no</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">repair_updates_email</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">repair_updates_sms</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">repair_checklist</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">repair_security_pwd</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">repair_security_pattern</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">repair_due_date</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">repair_device_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">order_addresses</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">is_recurring</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">recur_interval</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">recur_interval_type</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">recur_repetitions</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">recur_stopped_on</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">recur_parent_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">invoice_token</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">pay_term_number</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">pay_term_type</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">pjt_project_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">pjt_title</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">woocommerce_order_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">selling_price_group_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2018-01-06 07:06:11"</span>,
            "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2018-01-06 07:06:11"</span>,
            "<span class="hljs-attr">sell_lines</span>": [
                {
                    "<span class="hljs-attr">id</span>": <span class="hljs-number">1</span>,
                    "<span class="hljs-attr">transaction_id</span>": <span class="hljs-number">6</span>,
                    "<span class="hljs-attr">product_id</span>": <span class="hljs-number">2</span>,
                    "<span class="hljs-attr">variation_id</span>": <span class="hljs-number">3</span>,
                    "<span class="hljs-attr">quantity</span>": <span class="hljs-number">10</span>,
                    "<span class="hljs-attr">mfg_waste_percent</span>": <span class="hljs-string">"0.0000"</span>,
                    "<span class="hljs-attr">quantity_returned</span>": <span class="hljs-string">"0.0000"</span>,
                    "<span class="hljs-attr">unit_price_before_discount</span>": <span class="hljs-string">"70.0000"</span>,
                    "<span class="hljs-attr">unit_price</span>": <span class="hljs-string">"70.0000"</span>,
                    "<span class="hljs-attr">line_discount_type</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">line_discount_amount</span>": <span class="hljs-string">"0.0000"</span>,
                    "<span class="hljs-attr">unit_price_inc_tax</span>": <span class="hljs-string">"77.0000"</span>,
                    "<span class="hljs-attr">item_tax</span>": <span class="hljs-string">"7.0000"</span>,
                    "<span class="hljs-attr">tax_id</span>": <span class="hljs-number">1</span>,
                    "<span class="hljs-attr">discount_id</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">lot_no_line_id</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">sell_line_note</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">res_service_staff_id</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">res_line_order_status</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">woocommerce_line_items_id</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">parent_sell_line_id</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">children_type</span>": <span class="hljs-string">""</span>,
                    "<span class="hljs-attr">sub_unit_id</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2018-01-06 07:06:11"</span>,
                    "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2018-01-06 07:06:11"</span>
                }
            ],
            "<span class="hljs-attr">payment_lines</span>": [
                {
                    "<span class="hljs-attr">id</span>": <span class="hljs-number">1</span>,
                    "<span class="hljs-attr">transaction_id</span>": <span class="hljs-number">6</span>,
                    "<span class="hljs-attr">business_id</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">is_return</span>": <span class="hljs-number">0</span>,
                    "<span class="hljs-attr">amount</span>": <span class="hljs-string">"770.0000"</span>,
                    "<span class="hljs-attr">method</span>": <span class="hljs-string">"cash"</span>,
                    "<span class="hljs-attr">transaction_no</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">card_transaction_number</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">card_number</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">card_type</span>": <span class="hljs-string">"visa"</span>,
                    "<span class="hljs-attr">card_holder_name</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">card_month</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">card_year</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">card_security</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">cheque_number</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">bank_account_number</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">paid_on</span>": <span class="hljs-string">"2018-01-09 17:30:35"</span>,
                    "<span class="hljs-attr">created_by</span>": <span class="hljs-number">1</span>,
                    "<span class="hljs-attr">payment_for</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">parent_id</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">note</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">document</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">payment_ref_no</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">account_id</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2018-01-06 01:36:11"</span>,
                    "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2018-01-06 01:36:11"</span>
                }
            ]
        }
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST connector/api/sell</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>sells.*.location_id</code></td>
<td>integer</td>
<td>required</td>
<td>id of the business location</td>
</tr>
<tr>
<td><code>sells.*.contact_id</code></td>
<td>integer</td>
<td>required</td>
<td>id of the customer</td>
</tr>
<tr>
<td><code>sells.*.transaction_date</code></td>
<td>string</td>
<td>optional</td>
<td>transaction date format:Y-m-d H:i:s,</td>
</tr>
<tr>
<td><code>sells.*.invoice_no</code></td>
<td>string</td>
<td>optional</td>
<td>Invoice number</td>
</tr>
<tr>
<td><code>sells.*.status</code></td>
<td>string</td>
<td>optional</td>
<td>sale status (final, draft)</td>
</tr>
<tr>
<td><code>sells.*.is_quotation</code></td>
<td>boolean</td>
<td>optional</td>
<td>Is sell quotation (0, 1), If 1 status should be draft</td>
</tr>
<tr>
<td><code>sells.*.tax_rate_id</code></td>
<td>integer</td>
<td>optional</td>
<td>id of the tax rate applicable to the sale</td>
</tr>
<tr>
<td><code>sells.*.discount_amount</code></td>
<td>float</td>
<td>optional</td>
<td>discount amount applicable to the sale</td>
</tr>
<tr>
<td><code>sells.*.discount_type</code></td>
<td>string</td>
<td>optional</td>
<td>type of the discount amount (fixed, percentage)</td>
</tr>
<tr>
<td><code>sells.*.sale_note</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>sells.*.staff_note</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>sells.*.commission_agent</code></td>
<td>integer</td>
<td>optional</td>
<td>commission agent id</td>
</tr>
<tr>
<td><code>sells.*.shipping_details</code></td>
<td>string</td>
<td>optional</td>
<td>shipping details</td>
</tr>
<tr>
<td><code>sells.*.shipping_address</code></td>
<td>string</td>
<td>optional</td>
<td>shipping address</td>
</tr>
<tr>
<td><code>sells.*.shipping_status</code></td>
<td>string</td>
<td>optional</td>
<td>('ordered', 'packed', 'shipped', 'delivered', 'cancelled')</td>
</tr>
<tr>
<td><code>sells.*.delivered_to</code></td>
<td>string</td>
<td>optional</td>
<td>Name of the person recieved the consignment</td>
</tr>
<tr>
<td><code>sells.*.shipping_charges</code></td>
<td>float</td>
<td>optional</td>
<td>shipping amount</td>
</tr>
<tr>
<td><code>sells.*.packing_charge</code></td>
<td>float</td>
<td>optional</td>
<td>packing charge</td>
</tr>
<tr>
<td><code>sells.*.exchange_rate</code></td>
<td>float</td>
<td>optional</td>
<td>exchange rate for the currency used</td>
</tr>
<tr>
<td><code>sells.*.selling_price_group_id</code></td>
<td>integer</td>
<td>optional</td>
<td>id of the selling price group</td>
</tr>
<tr>
<td><code>sells.*.pay_term_number</code></td>
<td>integer</td>
<td>optional</td>
<td>pay term value</td>
</tr>
<tr>
<td><code>sells.*.pay_term_type</code></td>
<td>string</td>
<td>optional</td>
<td>type of the pay term value ('days', 'months')</td>
</tr>
<tr>
<td><code>sells.*.is_recurring</code></td>
<td>integer</td>
<td>optional</td>
<td>whether the invoice is recurring (0, 1)</td>
</tr>
<tr>
<td><code>sells.*.recur_interval</code></td>
<td>integer</td>
<td>optional</td>
<td>value of the interval invoice will be regenerated</td>
</tr>
<tr>
<td><code>sells.*.recur_interval_type</code></td>
<td>string</td>
<td>optional</td>
<td>type of the recur interval ('days', 'months', 'years')</td>
</tr>
<tr>
<td><code>sells.*.subscription_repeat_on</code></td>
<td>integer</td>
<td>optional</td>
<td>day of the month on which invoice will be generated if recur interval type is months (1-30)</td>
</tr>
<tr>
<td><code>sells.*.subscription_no</code></td>
<td>string</td>
<td>optional</td>
<td>subscription number</td>
</tr>
<tr>
<td><code>sells.*.recur_repetitions</code></td>
<td>integer</td>
<td>optional</td>
<td>total number of invoices to be generated</td>
</tr>
<tr>
<td><code>sells.*.rp_redeemed</code></td>
<td>integer</td>
<td>optional</td>
<td>reward points redeemed</td>
</tr>
<tr>
<td><code>sells.*.rp_redeemed_amount</code></td>
<td>float</td>
<td>optional</td>
<td>reward point redeemed amount after conversion</td>
</tr>
<tr>
<td><code>sells.*.types_of_service_id</code></td>
<td>integer</td>
<td>optional</td>
<td>types of service id</td>
</tr>
<tr>
<td><code>sells.*.service_custom_field_1</code></td>
<td>string</td>
<td>optional</td>
<td>types of service custom field 1</td>
</tr>
<tr>
<td><code>sells.*.service_custom_field_2</code></td>
<td>string</td>
<td>optional</td>
<td>types of service custom field 2</td>
</tr>
<tr>
<td><code>sells.*.service_custom_field_3</code></td>
<td>string</td>
<td>optional</td>
<td>types of service custom field 3</td>
</tr>
<tr>
<td><code>sells.*.service_custom_field_4</code></td>
<td>string</td>
<td>optional</td>
<td>types of service custom field 4</td>
</tr>
<tr>
<td><code>sells.*.round_off_amount</code></td>
<td>float</td>
<td>optional</td>
<td>round off amount on total payable</td>
</tr>
<tr>
<td><code>sells.*.table_id</code></td>
<td>integer</td>
<td>optional</td>
<td>id of the table</td>
</tr>
<tr>
<td><code>sells.*.service_staff_id</code></td>
<td>integer</td>
<td>optional</td>
<td>id of the service staff assigned to the sale</td>
</tr>
<tr>
<td><code>sells.*.change_return</code></td>
<td>float</td>
<td>optional</td>
<td>Excess paid amount</td>
</tr>
<tr>
<td><code>sells.*.products</code></td>
<td>array</td>
<td>required</td>
<td>array of the products for the sale</td>
</tr>
<tr>
<td><code>sells.*.payments</code></td>
<td>array</td>
<td>optional</td>
<td>payment lines for the sale</td>
</tr>
<tr>
<td><code>sells.*.products.*.product_id</code></td>
<td>integer</td>
<td>required</td>
<td>product id</td>
</tr>
<tr>
<td><code>sells.*.products.*.variation_id</code></td>
<td>integer</td>
<td>required</td>
<td>variation id</td>
</tr>
<tr>
<td><code>sells.*.products.*.quantity</code></td>
<td>float</td>
<td>required</td>
<td>quantity</td>
</tr>
<tr>
<td><code>sells.*.products.*.unit_price</code></td>
<td>float</td>
<td>optional</td>
<td>unit selling price</td>
</tr>
<tr>
<td><code>sells.*.products.*.tax_rate_id</code></td>
<td>integer</td>
<td>optional</td>
<td>tax rate id applicable on the product</td>
</tr>
<tr>
<td><code>sells.*.products.*.discount_amount</code></td>
<td>float</td>
<td>optional</td>
<td>discount amount applicable on the product</td>
</tr>
<tr>
<td><code>sells.*.products.*.discount_type</code></td>
<td>string</td>
<td>optional</td>
<td>type of discount amount ('fixed', 'percentage')</td>
</tr>
<tr>
<td><code>sells.*.products.*.sub_unit_id</code></td>
<td>integer</td>
<td>optional</td>
<td>sub unit id</td>
</tr>
<tr>
<td><code>sells.*.products.*.note</code></td>
<td>string</td>
<td>optional</td>
<td>note for the product</td>
</tr>
<tr>
<td><code>sells.*.payments.*.amount</code></td>
<td>float</td>
<td>required</td>
<td>amount of the payment</td>
</tr>
<tr>
<td><code>sells.*.payments.*.method</code></td>
<td>string</td>
<td>optional</td>
<td>payment methods ('cash', 'card', 'cheque', 'bank_transfer', 'other', 'custom_pay_1', 'custom_pay_2', 'custom_pay_3')</td>
</tr>
<tr>
<td><code>sells.*.payments.*.account_id</code></td>
<td>integer</td>
<td>optional</td>
<td>account id</td>
</tr>
<tr>
<td><code>sells.*.payments.*.card_number</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>sells.*.payments.*.card_holder_name</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>sells.*.payments.*.card_transaction_number</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>sells.*.payments.*.card_type</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>sells.*.payments.*.card_month</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>sells.*.payments.*.card_year</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>sells.*.payments.*.card_security</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>sells.*.payments.*.transaction_no_1</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>sells.*.payments.*.transaction_no_2</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>sells.*.payments.*.transaction_no_3</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>sells.*.payments.*.bank_account_number</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>sells.*.payments.*.note</code></td>
<td>string</td>
<td>optional</td>
<td>payment note</td>
</tr>
<tr>
<td><code>sells.*.payments.*.cheque_number</code></td>
<td>string</td>
<td>optional</td>
</tr>
</tbody>
</table>
<!-- END_b36ef2e65db4271ba22222f5c5dce2ba -->
<!-- START_58290524d0f076592088e0a8e43da94c -->
<div name="get-the-specified-sell" data-unique="get-the-specified-sell"></div><h2 id="get-the-specified-sell">Get the specified sell</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre style="display: block;"><code class="language-bash hljs">curl -X GET \
    -G <span class="hljs-string">"https://app.azhasoft.com/connector/api/sell/55"</span> \
    -H <span class="hljs-string">"Content-Type: application/json"</span> \
    -H <span class="hljs-string">"Accept: application/json"</span> \
    -H <span class="hljs-string">"Authorization: Bearer {token}"</span></code></pre>
<pre style="display: none;"><code class="language-javascript hljs"><span class="hljs-keyword">const</span> url = <span class="hljs-keyword">new</span> URL(
    <span class="hljs-string">"https://app.azhasoft.com/connector/api/sell/55"</span>
);

<span class="hljs-keyword">let</span> headers = {
    <span class="hljs-string">"Content-Type"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Accept"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Authorization"</span>: <span class="hljs-string">"Bearer {token}"</span>,
};

fetch(url, {
    method: <span class="hljs-string">"GET"</span>,
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; <span class="hljs-built_in">console</span>.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json hljs">{
    "<span class="hljs-attr">data</span>": [
        {
            "<span class="hljs-attr">id</span>": <span class="hljs-number">55</span>,
            "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">location_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">res_table_id</span>": <span class="hljs-number">5</span>,
            "<span class="hljs-attr">res_waiter_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">res_order_status</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">type</span>": <span class="hljs-string">"sell"</span>,
            "<span class="hljs-attr">sub_type</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">status</span>": <span class="hljs-string">"final"</span>,
            "<span class="hljs-attr">is_quotation</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">payment_status</span>": <span class="hljs-string">"paid"</span>,
            "<span class="hljs-attr">adjustment_type</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">contact_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">customer_group_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">invoice_no</span>": <span class="hljs-string">"AS0007"</span>,
            "<span class="hljs-attr">ref_no</span>": <span class="hljs-string">""</span>,
            "<span class="hljs-attr">subscription_no</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">subscription_repeat_on</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">transaction_date</span>": <span class="hljs-string">"2020-06-04 23:29:36"</span>,
            "<span class="hljs-attr">total_before_tax</span>": <span class="hljs-string">"437.5000"</span>,
            "<span class="hljs-attr">tax_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">tax_amount</span>": <span class="hljs-string">"39.3750"</span>,
            "<span class="hljs-attr">discount_type</span>": <span class="hljs-string">"percentage"</span>,
            "<span class="hljs-attr">discount_amount</span>": <span class="hljs-string">"10.0000"</span>,
            "<span class="hljs-attr">rp_redeemed</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">rp_redeemed_amount</span>": <span class="hljs-string">"0.0000"</span>,
            "<span class="hljs-attr">shipping_details</span>": <span class="hljs-string">"Express Delivery"</span>,
            "<span class="hljs-attr">shipping_address</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">shipping_status</span>": <span class="hljs-string">"ordered"</span>,
            "<span class="hljs-attr">delivered_to</span>": <span class="hljs-string">"Mr Robin"</span>,
            "<span class="hljs-attr">shipping_charges</span>": <span class="hljs-string">"10.0000"</span>,
            "<span class="hljs-attr">additional_notes</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">staff_note</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">round_off_amount</span>": <span class="hljs-string">"0.0000"</span>,
            "<span class="hljs-attr">final_total</span>": <span class="hljs-string">"453.1300"</span>,
            "<span class="hljs-attr">expense_category_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">expense_for</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">commission_agent</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">document</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">is_direct_sale</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">is_suspend</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">exchange_rate</span>": <span class="hljs-string">"1.000"</span>,
            "<span class="hljs-attr">total_amount_recovered</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">transfer_parent_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">return_parent_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">opening_stock_product_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">created_by</span>": <span class="hljs-number">9</span>,
            "<span class="hljs-attr">import_batch</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">import_time</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">types_of_service_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">packing_charge</span>": <span class="hljs-string">"10.0000"</span>,
            "<span class="hljs-attr">packing_charge_type</span>": <span class="hljs-string">"fixed"</span>,
            "<span class="hljs-attr">service_custom_field_1</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">service_custom_field_2</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">service_custom_field_3</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">service_custom_field_4</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">mfg_parent_production_purchase_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">mfg_wasted_units</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">mfg_production_cost</span>": <span class="hljs-string">"0.0000"</span>,
            "<span class="hljs-attr">mfg_is_final</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">is_created_from_api</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">essentials_duration</span>": <span class="hljs-string">"0.00"</span>,
            "<span class="hljs-attr">essentials_duration_unit</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">essentials_amount_per_unit_duration</span>": <span class="hljs-string">"0.0000"</span>,
            "<span class="hljs-attr">essentials_allowances</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">essentials_deductions</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">rp_earned</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">repair_completed_on</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">repair_warranty_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">repair_brand_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">repair_status_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">repair_model_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">repair_defects</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">repair_serial_no</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">repair_updates_email</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">repair_updates_sms</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">repair_checklist</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">repair_security_pwd</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">repair_security_pattern</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">repair_due_date</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">repair_device_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">order_addresses</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">is_recurring</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">recur_interval</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">recur_interval_type</span>": <span class="hljs-string">"days"</span>,
            "<span class="hljs-attr">recur_repetitions</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">recur_stopped_on</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">recur_parent_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">invoice_token</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">pay_term_number</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">pay_term_type</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">pjt_project_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">pjt_title</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">woocommerce_order_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">selling_price_group_id</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2020-06-04 23:29:36"</span>,
            "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2020-06-04 23:29:36"</span>,
            "<span class="hljs-attr">sell_lines</span>": [
                {
                    "<span class="hljs-attr">id</span>": <span class="hljs-number">38</span>,
                    "<span class="hljs-attr">transaction_id</span>": <span class="hljs-number">55</span>,
                    "<span class="hljs-attr">product_id</span>": <span class="hljs-number">17</span>,
                    "<span class="hljs-attr">variation_id</span>": <span class="hljs-number">58</span>,
                    "<span class="hljs-attr">quantity</span>": <span class="hljs-number">1</span>,
                    "<span class="hljs-attr">mfg_waste_percent</span>": <span class="hljs-string">"0.0000"</span>,
                    "<span class="hljs-attr">quantity_returned</span>": <span class="hljs-string">"0.0000"</span>,
                    "<span class="hljs-attr">unit_price_before_discount</span>": <span class="hljs-string">"437.5000"</span>,
                    "<span class="hljs-attr">unit_price</span>": <span class="hljs-string">"437.5000"</span>,
                    "<span class="hljs-attr">line_discount_type</span>": <span class="hljs-string">"fixed"</span>,
                    "<span class="hljs-attr">line_discount_amount</span>": <span class="hljs-string">"0.0000"</span>,
                    "<span class="hljs-attr">unit_price_inc_tax</span>": <span class="hljs-string">"437.5000"</span>,
                    "<span class="hljs-attr">item_tax</span>": <span class="hljs-string">"0.0000"</span>,
                    "<span class="hljs-attr">tax_id</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">discount_id</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">lot_no_line_id</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">sell_line_note</span>": <span class="hljs-string">""</span>,
                    "<span class="hljs-attr">res_service_staff_id</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">res_line_order_status</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">woocommerce_line_items_id</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">parent_sell_line_id</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">children_type</span>": <span class="hljs-string">""</span>,
                    "<span class="hljs-attr">sub_unit_id</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2020-06-04 23:29:36"</span>,
                    "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2020-06-04 23:29:36"</span>
                }
            ],
            "<span class="hljs-attr">payment_lines</span>": [
                {
                    "<span class="hljs-attr">id</span>": <span class="hljs-number">37</span>,
                    "<span class="hljs-attr">transaction_id</span>": <span class="hljs-number">55</span>,
                    "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
                    "<span class="hljs-attr">is_return</span>": <span class="hljs-number">0</span>,
                    "<span class="hljs-attr">amount</span>": <span class="hljs-string">"453.1300"</span>,
                    "<span class="hljs-attr">method</span>": <span class="hljs-string">"cash"</span>,
                    "<span class="hljs-attr">transaction_no</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">card_transaction_number</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">card_number</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">card_type</span>": <span class="hljs-string">"credit"</span>,
                    "<span class="hljs-attr">card_holder_name</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">card_month</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">card_year</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">card_security</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">cheque_number</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">bank_account_number</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">paid_on</span>": <span class="hljs-string">"2020-06-04 23:29:36"</span>,
                    "<span class="hljs-attr">created_by</span>": <span class="hljs-number">9</span>,
                    "<span class="hljs-attr">payment_for</span>": <span class="hljs-number">1</span>,
                    "<span class="hljs-attr">parent_id</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">note</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">document</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">payment_ref_no</span>": <span class="hljs-string">"SP2020\/0002"</span>,
                    "<span class="hljs-attr">account_id</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2020-06-04 23:29:36"</span>,
                    "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2020-06-04 23:29:36"</span>
                }
            ]
        }
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET connector/api/sell/{sell}</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>sell</code></td>
<td>required</td>
<td>comma separated ids of the sells</td>
</tr>
</tbody>
</table>
<!-- END_58290524d0f076592088e0a8e43da94c -->
<!-- START_2a80f06912c7d436a7f8e3deb270d869 -->
<div name="update-sell" data-unique="update-sell"></div><h2 id="update-sell">Update sell</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre style="display: block;"><code class="language-bash hljs">curl -X PUT \
    <span class="hljs-string">"https://app.azhasoft.com/connector/api/sell/6"</span> \
    -H <span class="hljs-string">"Content-Type: application/json"</span> \
    -H <span class="hljs-string">"Accept: application/json"</span> \
    -H <span class="hljs-string">"Authorization: Bearer {token}"</span> \
    <span class="hljs-_">-d</span> <span class="hljs-string">'{"contact_id":13,"transaction_date":"2020-5-7 15:20:22","status":"final","is_quotation":true,"tax_rate_id":9,"discount_amount":10,"discount_type":"fixed","sale_note":"impedit","staff_note":"quia","commission_agent":17,"shipping_details":"Express Delivery","shipping_address":"cum","shipping_status":"ordered","delivered_to":"Mr Robin","shipping_charges":10,"packing_charge":10,"exchange_rate":1,"selling_price_group_id":7,"pay_term_number":3,"pay_term_type":"months","is_recurring":0,"recur_interval":9,"recur_interval_type":"days","subscription_repeat_on":7,"subscription_no":"et","recur_repetitions":13,"rp_redeemed":13,"rp_redeemed_amount":13.5,"types_of_service_id":5,"service_custom_field_1":"reprehenderit","service_custom_field_2":"nobis","service_custom_field_3":"distinctio","service_custom_field_4":"nihil","round_off_amount":93870.13096,"table_id":11,"service_staff_id":16,"change_return":0,"change_return_id":8,"products":[{"sell_line_id":8,"product_id":17,"variation_id":58,"quantity":1,"unit_price":437.5,"tax_rate_id":11,"discount_amount":0,"discount_type":"percentage","sub_unit_id":15,"note":"doloremque"}],"payments":[{"payment_id":18,"amount":453.13,"method":"cash","account_id":19,"card_number":"vitae","card_holder_name":"ex","card_transaction_number":"et","card_type":"aut","card_month":"et","card_year":"cupiditate","card_security":"odit","transaction_no_1":"iste","transaction_no_2":"eos","transaction_no_3":"tempore","note":"alias","cheque_number":"corporis","bank_account_number":"quasi"}]}'</span>
</code></pre>
<pre style="display: none;"><code class="language-javascript hljs"><span class="hljs-keyword">const</span> url = <span class="hljs-keyword">new</span> URL(
    <span class="hljs-string">"https://app.azhasoft.com/connector/api/sell/6"</span>
);

<span class="hljs-keyword">let</span> headers = {
    <span class="hljs-string">"Content-Type"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Accept"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Authorization"</span>: <span class="hljs-string">"Bearer {token}"</span>,
};

<span class="hljs-keyword">let</span> body = {
    <span class="hljs-string">"contact_id"</span>: <span class="hljs-number">13</span>,
    <span class="hljs-string">"transaction_date"</span>: <span class="hljs-string">"2020-5-7 15:20:22"</span>,
    <span class="hljs-string">"status"</span>: <span class="hljs-string">"final"</span>,
    <span class="hljs-string">"is_quotation"</span>: <span class="hljs-literal">true</span>,
    <span class="hljs-string">"tax_rate_id"</span>: <span class="hljs-number">9</span>,
    <span class="hljs-string">"discount_amount"</span>: <span class="hljs-number">10</span>,
    <span class="hljs-string">"discount_type"</span>: <span class="hljs-string">"fixed"</span>,
    <span class="hljs-string">"sale_note"</span>: <span class="hljs-string">"impedit"</span>,
    <span class="hljs-string">"staff_note"</span>: <span class="hljs-string">"quia"</span>,
    <span class="hljs-string">"commission_agent"</span>: <span class="hljs-number">17</span>,
    <span class="hljs-string">"shipping_details"</span>: <span class="hljs-string">"Express Delivery"</span>,
    <span class="hljs-string">"shipping_address"</span>: <span class="hljs-string">"cum"</span>,
    <span class="hljs-string">"shipping_status"</span>: <span class="hljs-string">"ordered"</span>,
    <span class="hljs-string">"delivered_to"</span>: <span class="hljs-string">"Mr Robin"</span>,
    <span class="hljs-string">"shipping_charges"</span>: <span class="hljs-number">10</span>,
    <span class="hljs-string">"packing_charge"</span>: <span class="hljs-number">10</span>,
    <span class="hljs-string">"exchange_rate"</span>: <span class="hljs-number">1</span>,
    <span class="hljs-string">"selling_price_group_id"</span>: <span class="hljs-number">7</span>,
    <span class="hljs-string">"pay_term_number"</span>: <span class="hljs-number">3</span>,
    <span class="hljs-string">"pay_term_type"</span>: <span class="hljs-string">"months"</span>,
    <span class="hljs-string">"is_recurring"</span>: <span class="hljs-number">0</span>,
    <span class="hljs-string">"recur_interval"</span>: <span class="hljs-number">9</span>,
    <span class="hljs-string">"recur_interval_type"</span>: <span class="hljs-string">"days"</span>,
    <span class="hljs-string">"subscription_repeat_on"</span>: <span class="hljs-number">7</span>,
    <span class="hljs-string">"subscription_no"</span>: <span class="hljs-string">"et"</span>,
    <span class="hljs-string">"recur_repetitions"</span>: <span class="hljs-number">13</span>,
    <span class="hljs-string">"rp_redeemed"</span>: <span class="hljs-number">13</span>,
    <span class="hljs-string">"rp_redeemed_amount"</span>: <span class="hljs-number">13.5</span>,
    <span class="hljs-string">"types_of_service_id"</span>: <span class="hljs-number">5</span>,
    <span class="hljs-string">"service_custom_field_1"</span>: <span class="hljs-string">"reprehenderit"</span>,
    <span class="hljs-string">"service_custom_field_2"</span>: <span class="hljs-string">"nobis"</span>,
    <span class="hljs-string">"service_custom_field_3"</span>: <span class="hljs-string">"distinctio"</span>,
    <span class="hljs-string">"service_custom_field_4"</span>: <span class="hljs-string">"nihil"</span>,
    <span class="hljs-string">"round_off_amount"</span>: <span class="hljs-number">93870.13096</span>,
    <span class="hljs-string">"table_id"</span>: <span class="hljs-number">11</span>,
    <span class="hljs-string">"service_staff_id"</span>: <span class="hljs-number">16</span>,
    <span class="hljs-string">"change_return"</span>: <span class="hljs-number">0</span>,
    <span class="hljs-string">"change_return_id"</span>: <span class="hljs-number">8</span>,
    <span class="hljs-string">"products"</span>: [
        {
            <span class="hljs-string">"sell_line_id"</span>: <span class="hljs-number">8</span>,
            <span class="hljs-string">"product_id"</span>: <span class="hljs-number">17</span>,
            <span class="hljs-string">"variation_id"</span>: <span class="hljs-number">58</span>,
            <span class="hljs-string">"quantity"</span>: <span class="hljs-number">1</span>,
            <span class="hljs-string">"unit_price"</span>: <span class="hljs-number">437.5</span>,
            <span class="hljs-string">"tax_rate_id"</span>: <span class="hljs-number">11</span>,
            <span class="hljs-string">"discount_amount"</span>: <span class="hljs-number">0</span>,
            <span class="hljs-string">"discount_type"</span>: <span class="hljs-string">"percentage"</span>,
            <span class="hljs-string">"sub_unit_id"</span>: <span class="hljs-number">15</span>,
            <span class="hljs-string">"note"</span>: <span class="hljs-string">"doloremque"</span>
        }
    ],
    <span class="hljs-string">"payments"</span>: [
        {
            <span class="hljs-string">"payment_id"</span>: <span class="hljs-number">18</span>,
            <span class="hljs-string">"amount"</span>: <span class="hljs-number">453.13</span>,
            <span class="hljs-string">"method"</span>: <span class="hljs-string">"cash"</span>,
            <span class="hljs-string">"account_id"</span>: <span class="hljs-number">19</span>,
            <span class="hljs-string">"card_number"</span>: <span class="hljs-string">"vitae"</span>,
            <span class="hljs-string">"card_holder_name"</span>: <span class="hljs-string">"ex"</span>,
            <span class="hljs-string">"card_transaction_number"</span>: <span class="hljs-string">"et"</span>,
            <span class="hljs-string">"card_type"</span>: <span class="hljs-string">"aut"</span>,
            <span class="hljs-string">"card_month"</span>: <span class="hljs-string">"et"</span>,
            <span class="hljs-string">"card_year"</span>: <span class="hljs-string">"cupiditate"</span>,
            <span class="hljs-string">"card_security"</span>: <span class="hljs-string">"odit"</span>,
            <span class="hljs-string">"transaction_no_1"</span>: <span class="hljs-string">"iste"</span>,
            <span class="hljs-string">"transaction_no_2"</span>: <span class="hljs-string">"eos"</span>,
            <span class="hljs-string">"transaction_no_3"</span>: <span class="hljs-string">"tempore"</span>,
            <span class="hljs-string">"note"</span>: <span class="hljs-string">"alias"</span>,
            <span class="hljs-string">"cheque_number"</span>: <span class="hljs-string">"corporis"</span>,
            <span class="hljs-string">"bank_account_number"</span>: <span class="hljs-string">"quasi"</span>
        }
    ]
}

fetch(url, {
    method: <span class="hljs-string">"PUT"</span>,
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; <span class="hljs-built_in">console</span>.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json hljs">{
    "<span class="hljs-attr">id</span>": <span class="hljs-number">91</span>,
    "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
    "<span class="hljs-attr">location_id</span>": <span class="hljs-number">1</span>,
    "<span class="hljs-attr">res_table_id</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">res_waiter_id</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">res_order_status</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">type</span>": <span class="hljs-string">"sell"</span>,
    "<span class="hljs-attr">sub_type</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">status</span>": <span class="hljs-string">"final"</span>,
    "<span class="hljs-attr">is_quotation</span>": <span class="hljs-number">0</span>,
    "<span class="hljs-attr">payment_status</span>": <span class="hljs-string">"paid"</span>,
    "<span class="hljs-attr">adjustment_type</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">contact_id</span>": <span class="hljs-number">1</span>,
    "<span class="hljs-attr">customer_group_id</span>": <span class="hljs-number">1</span>,
    "<span class="hljs-attr">invoice_no</span>": <span class="hljs-string">"AS0020"</span>,
    "<span class="hljs-attr">ref_no</span>": <span class="hljs-string">""</span>,
    "<span class="hljs-attr">subscription_no</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">subscription_repeat_on</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">transaction_date</span>": <span class="hljs-string">"25-09-2020 15:22"</span>,
    "<span class="hljs-attr">total_before_tax</span>": <span class="hljs-number">962.5</span>,
    "<span class="hljs-attr">tax_id</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">tax_amount</span>": <span class="hljs-number">0</span>,
    "<span class="hljs-attr">discount_type</span>": <span class="hljs-string">"fixed"</span>,
    "<span class="hljs-attr">discount_amount</span>": <span class="hljs-string">"19.5000"</span>,
    "<span class="hljs-attr">rp_redeemed</span>": <span class="hljs-number">0</span>,
    "<span class="hljs-attr">rp_redeemed_amount</span>": <span class="hljs-string">"0.0000"</span>,
    "<span class="hljs-attr">shipping_details</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">shipping_address</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">shipping_status</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">delivered_to</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">shipping_charges</span>": <span class="hljs-string">"0.0000"</span>,
    "<span class="hljs-attr">additional_notes</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">staff_note</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">round_off_amount</span>": <span class="hljs-string">"0.0000"</span>,
    "<span class="hljs-attr">final_total</span>": <span class="hljs-number">943</span>,
    "<span class="hljs-attr">expense_category_id</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">expense_for</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">commission_agent</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">document</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">is_direct_sale</span>": <span class="hljs-number">0</span>,
    "<span class="hljs-attr">is_suspend</span>": <span class="hljs-number">0</span>,
    "<span class="hljs-attr">exchange_rate</span>": <span class="hljs-string">"1.000"</span>,
    "<span class="hljs-attr">total_amount_recovered</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">transfer_parent_id</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">return_parent_id</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">opening_stock_product_id</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">created_by</span>": <span class="hljs-number">9</span>,
    "<span class="hljs-attr">import_batch</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">import_time</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">types_of_service_id</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">packing_charge</span>": <span class="hljs-string">"0.0000"</span>,
    "<span class="hljs-attr">packing_charge_type</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">service_custom_field_1</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">service_custom_field_2</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">service_custom_field_3</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">service_custom_field_4</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">mfg_parent_production_purchase_id</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">mfg_wasted_units</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">mfg_production_cost</span>": <span class="hljs-string">"0.0000"</span>,
    "<span class="hljs-attr">mfg_production_cost_type</span>": <span class="hljs-string">"percentage"</span>,
    "<span class="hljs-attr">mfg_is_final</span>": <span class="hljs-number">0</span>,
    "<span class="hljs-attr">is_created_from_api</span>": <span class="hljs-number">0</span>,
    "<span class="hljs-attr">essentials_duration</span>": <span class="hljs-string">"0.00"</span>,
    "<span class="hljs-attr">essentials_duration_unit</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">essentials_amount_per_unit_duration</span>": <span class="hljs-string">"0.0000"</span>,
    "<span class="hljs-attr">essentials_allowances</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">essentials_deductions</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">rp_earned</span>": <span class="hljs-number">0</span>,
    "<span class="hljs-attr">repair_completed_on</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">repair_warranty_id</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">repair_brand_id</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">repair_status_id</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">repair_model_id</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">repair_job_sheet_id</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">repair_defects</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">repair_serial_no</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">repair_checklist</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">repair_security_pwd</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">repair_security_pattern</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">repair_due_date</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">repair_device_id</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">repair_updates_notif</span>": <span class="hljs-number">0</span>,
    "<span class="hljs-attr">order_addresses</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">is_recurring</span>": <span class="hljs-number">0</span>,
    "<span class="hljs-attr">recur_interval</span>": <span class="hljs-number">1</span>,
    "<span class="hljs-attr">recur_interval_type</span>": <span class="hljs-string">"days"</span>,
    "<span class="hljs-attr">recur_repetitions</span>": <span class="hljs-number">0</span>,
    "<span class="hljs-attr">recur_stopped_on</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">recur_parent_id</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">invoice_token</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">pay_term_number</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">pay_term_type</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">pjt_project_id</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">pjt_title</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">woocommerce_order_id</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">selling_price_group_id</span>": <span class="hljs-number">0</span>,
    "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2020-09-23 20:16:19"</span>,
    "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2020-09-25 17:57:08"</span>,
    "<span class="hljs-attr">payment_lines</span>": [
        {
            "<span class="hljs-attr">id</span>": <span class="hljs-number">55</span>,
            "<span class="hljs-attr">transaction_id</span>": <span class="hljs-number">91</span>,
            "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">is_return</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">amount</span>": <span class="hljs-string">"461.7500"</span>,
            "<span class="hljs-attr">method</span>": <span class="hljs-string">"cash"</span>,
            "<span class="hljs-attr">transaction_no</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">card_transaction_number</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">card_number</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">card_type</span>": <span class="hljs-string">"credit"</span>,
            "<span class="hljs-attr">card_holder_name</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">card_month</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">card_year</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">card_security</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">cheque_number</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">bank_account_number</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">paid_on</span>": <span class="hljs-string">"2020-09-23 20:16:19"</span>,
            "<span class="hljs-attr">created_by</span>": <span class="hljs-number">9</span>,
            "<span class="hljs-attr">is_advance</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">payment_for</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">parent_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">note</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">document</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">payment_ref_no</span>": <span class="hljs-string">"SP2020\/0018"</span>,
            "<span class="hljs-attr">account_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2020-09-23 20:16:19"</span>,
            "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2020-09-23 20:16:19"</span>
        }
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>PUT connector/api/sell/{sell}</code></p>
<p><code>PATCH connector/api/sell/{sell}</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>sell</code></td>
<td>required</td>
<td>id of sell to update</td>
</tr>
</tbody>
</table>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>contact_id</code></td>
<td>integer</td>
<td>optional</td>
<td>id of the customer</td>
</tr>
<tr>
<td><code>transaction_date</code></td>
<td>string</td>
<td>optional</td>
<td>transaction date format:Y-m-d H:i:s,</td>
</tr>
<tr>
<td><code>status</code></td>
<td>string</td>
<td>optional</td>
<td>sale status (final, draft)</td>
</tr>
<tr>
<td><code>is_quotation</code></td>
<td>boolean</td>
<td>optional</td>
<td>Is sell quotation (0, 1), If 1 status should be draft</td>
</tr>
<tr>
<td><code>tax_rate_id</code></td>
<td>integer</td>
<td>optional</td>
<td>id of the tax rate applicable to the sale</td>
</tr>
<tr>
<td><code>discount_amount</code></td>
<td>float</td>
<td>optional</td>
<td>discount amount applicable to the sale</td>
</tr>
<tr>
<td><code>discount_type</code></td>
<td>string</td>
<td>optional</td>
<td>type of the discount amount (fixed, percentage)</td>
</tr>
<tr>
<td><code>sale_note</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>staff_note</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>commission_agent</code></td>
<td>integer</td>
<td>optional</td>
<td>commission agent id</td>
</tr>
<tr>
<td><code>shipping_details</code></td>
<td>string</td>
<td>optional</td>
<td>shipping details</td>
</tr>
<tr>
<td><code>shipping_address</code></td>
<td>string</td>
<td>optional</td>
<td>shipping address</td>
</tr>
<tr>
<td><code>shipping_status</code></td>
<td>string</td>
<td>optional</td>
<td>('ordered', 'packed', 'shipped', 'delivered', 'cancelled')</td>
</tr>
<tr>
<td><code>delivered_to</code></td>
<td>string</td>
<td>optional</td>
<td>Name of the person recieved the consignment</td>
</tr>
<tr>
<td><code>shipping_charges</code></td>
<td>float</td>
<td>optional</td>
<td>shipping amount</td>
</tr>
<tr>
<td><code>packing_charge</code></td>
<td>float</td>
<td>optional</td>
<td>packing charge</td>
</tr>
<tr>
<td><code>exchange_rate</code></td>
<td>float</td>
<td>optional</td>
<td>exchange rate for the currency used</td>
</tr>
<tr>
<td><code>selling_price_group_id</code></td>
<td>integer</td>
<td>optional</td>
<td>id of the selling price group</td>
</tr>
<tr>
<td><code>pay_term_number</code></td>
<td>integer</td>
<td>optional</td>
<td>pay term value</td>
</tr>
<tr>
<td><code>pay_term_type</code></td>
<td>string</td>
<td>optional</td>
<td>type of the pay term value ('days', 'months')</td>
</tr>
<tr>
<td><code>is_recurring</code></td>
<td>integer</td>
<td>optional</td>
<td>whether the invoice is recurring (0, 1)</td>
</tr>
<tr>
<td><code>recur_interval</code></td>
<td>integer</td>
<td>optional</td>
<td>value of the interval invoice will be regenerated</td>
</tr>
<tr>
<td><code>recur_interval_type</code></td>
<td>string</td>
<td>optional</td>
<td>type of the recur interval ('days', 'months', 'years')</td>
</tr>
<tr>
<td><code>subscription_repeat_on</code></td>
<td>integer</td>
<td>optional</td>
<td>day of the month on which invoice will be generated if recur interval type is months (1-30)</td>
</tr>
<tr>
<td><code>subscription_no</code></td>
<td>string</td>
<td>optional</td>
<td>subscription number</td>
</tr>
<tr>
<td><code>recur_repetitions</code></td>
<td>integer</td>
<td>optional</td>
<td>total number of invoices to be generated</td>
</tr>
<tr>
<td><code>rp_redeemed</code></td>
<td>integer</td>
<td>optional</td>
<td>reward points redeemed</td>
</tr>
<tr>
<td><code>rp_redeemed_amount</code></td>
<td>float</td>
<td>optional</td>
<td>reward point redeemed amount after conversion</td>
</tr>
<tr>
<td><code>types_of_service_id</code></td>
<td>integer</td>
<td>optional</td>
<td>types of service id</td>
</tr>
<tr>
<td><code>service_custom_field_1</code></td>
<td>string</td>
<td>optional</td>
<td>types of service custom field 1</td>
</tr>
<tr>
<td><code>service_custom_field_2</code></td>
<td>string</td>
<td>optional</td>
<td>types of service custom field 2</td>
</tr>
<tr>
<td><code>service_custom_field_3</code></td>
<td>string</td>
<td>optional</td>
<td>types of service custom field 3</td>
</tr>
<tr>
<td><code>service_custom_field_4</code></td>
<td>string</td>
<td>optional</td>
<td>types of service custom field 4</td>
</tr>
<tr>
<td><code>round_off_amount</code></td>
<td>float</td>
<td>optional</td>
<td>round off amount on total payable</td>
</tr>
<tr>
<td><code>table_id</code></td>
<td>integer</td>
<td>optional</td>
<td>id of the table</td>
</tr>
<tr>
<td><code>service_staff_id</code></td>
<td>integer</td>
<td>optional</td>
<td>id of the service staff assigned to the sale</td>
</tr>
<tr>
<td><code>change_return</code></td>
<td>float</td>
<td>optional</td>
<td>Excess paid amount</td>
</tr>
<tr>
<td><code>change_return_id</code></td>
<td>integer</td>
<td>optional</td>
<td>id of the change return payment if exists</td>
</tr>
<tr>
<td><code>products</code></td>
<td>array</td>
<td>required</td>
<td>array of the products for the sale</td>
</tr>
<tr>
<td><code>payments</code></td>
<td>array</td>
<td>optional</td>
<td>payment lines for the sale</td>
</tr>
<tr>
<td><code>products.*.sell_line_id</code></td>
<td>integer</td>
<td>optional</td>
<td>sell line id for existing item only</td>
</tr>
<tr>
<td><code>products.*.product_id</code></td>
<td>integer</td>
<td>optional</td>
<td>product id</td>
</tr>
<tr>
<td><code>products.*.variation_id</code></td>
<td>integer</td>
<td>optional</td>
<td>variation id</td>
</tr>
<tr>
<td><code>products.*.quantity</code></td>
<td>float</td>
<td>optional</td>
<td>quantity</td>
</tr>
<tr>
<td><code>products.*.unit_price</code></td>
<td>float</td>
<td>optional</td>
<td>unit selling price</td>
</tr>
<tr>
<td><code>products.*.tax_rate_id</code></td>
<td>integer</td>
<td>optional</td>
<td>tax rate id applicable on the product</td>
</tr>
<tr>
<td><code>products.*.discount_amount</code></td>
<td>float</td>
<td>optional</td>
<td>discount amount applicable on the product</td>
</tr>
<tr>
<td><code>products.*.discount_type</code></td>
<td>string</td>
<td>optional</td>
<td>type of discount amount ('fixed', 'percentage')</td>
</tr>
<tr>
<td><code>products.*.sub_unit_id</code></td>
<td>integer</td>
<td>optional</td>
<td>sub unit id</td>
</tr>
<tr>
<td><code>products.*.note</code></td>
<td>string</td>
<td>optional</td>
<td>note for the product</td>
</tr>
<tr>
<td><code>payments.*.payment_id</code></td>
<td>integer</td>
<td>optional</td>
<td>payment id for existing payment line</td>
</tr>
<tr>
<td><code>payments.*.amount</code></td>
<td>float</td>
<td>optional</td>
<td>amount of the payment</td>
</tr>
<tr>
<td><code>payments.*.method</code></td>
<td>string</td>
<td>optional</td>
<td>payment methods ('cash', 'card', 'cheque', 'bank_transfer', 'other', 'custom_pay_1', 'custom_pay_2', 'custom_pay_3')</td>
</tr>
<tr>
<td><code>payments.*.account_id</code></td>
<td>integer</td>
<td>optional</td>
<td>account id</td>
</tr>
<tr>
<td><code>payments.*.card_number</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>payments.*.card_holder_name</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>payments.*.card_transaction_number</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>payments.*.card_type</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>payments.*.card_month</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>payments.*.card_year</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>payments.*.card_security</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>payments.*.transaction_no_1</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>payments.*.transaction_no_2</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>payments.*.transaction_no_3</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>payments.*.note</code></td>
<td>string</td>
<td>optional</td>
<td>payment note</td>
</tr>
<tr>
<td><code>payments.*.cheque_number</code></td>
<td>string</td>
<td>optional</td>
</tr>
<tr>
<td><code>payments.*.bank_account_number</code></td>
<td>string</td>
<td>optional</td>
</tr>
</tbody>
</table>
<!-- END_2a80f06912c7d436a7f8e3deb270d869 -->
<!-- START_baafa13f7e2b1743b19694175534b085 -->
<div name="delete-sell" data-unique="delete-sell"></div><h2 id="delete-sell">Delete Sell</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre style="display: block;"><code class="language-bash hljs">curl -X DELETE \
    <span class="hljs-string">"https://app.azhasoft.com/connector/api/sell/odio"</span> \
    -H <span class="hljs-string">"Content-Type: application/json"</span> \
    -H <span class="hljs-string">"Accept: application/json"</span> \
    -H <span class="hljs-string">"Authorization: Bearer {token}"</span></code></pre>
<pre style="display: none;"><code class="language-javascript hljs"><span class="hljs-keyword">const</span> url = <span class="hljs-keyword">new</span> URL(
    <span class="hljs-string">"https://app.azhasoft.com/connector/api/sell/odio"</span>
);

<span class="hljs-keyword">let</span> headers = {
    <span class="hljs-string">"Content-Type"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Accept"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Authorization"</span>: <span class="hljs-string">"Bearer {token}"</span>,
};

fetch(url, {
    method: <span class="hljs-string">"DELETE"</span>,
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; <span class="hljs-built_in">console</span>.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE connector/api/sell/{sell}</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>sell</code></td>
<td>required</td>
<td>id of the sell to be deleted</td>
</tr>
</tbody>
</table>
<!-- END_baafa13f7e2b1743b19694175534b085 -->
<!-- START_915df593fed3a09da6acc3b2f4cce019 -->
<div name="add-sell-return" data-unique="add-sell-return"></div><h2 id="add-sell-return">Add Sell Return</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre style="display: block;"><code class="language-bash hljs">curl -X POST \
    <span class="hljs-string">"https://app.azhasoft.com/connector/api/sell-return"</span> \
    -H <span class="hljs-string">"Content-Type: application/json"</span> \
    -H <span class="hljs-string">"Accept: application/json"</span> \
    -H <span class="hljs-string">"Authorization: Bearer {token}"</span> \
    <span class="hljs-_">-d</span> <span class="hljs-string">'{"transaction_id":6,"transaction_date":"2020-5-7 15:20:22","invoice_no":"qui","discount_amount":10,"discount_type":"fixed","products":[{"sell_line_id":5,"quantity":1,"unit_price_inc_tax":437.5}]}'</span>
</code></pre>
<pre style="display: none;"><code class="language-javascript hljs"><span class="hljs-keyword">const</span> url = <span class="hljs-keyword">new</span> URL(
    <span class="hljs-string">"https://app.azhasoft.com/connector/api/sell-return"</span>
);

<span class="hljs-keyword">let</span> headers = {
    <span class="hljs-string">"Content-Type"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Accept"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Authorization"</span>: <span class="hljs-string">"Bearer {token}"</span>,
};

<span class="hljs-keyword">let</span> body = {
    <span class="hljs-string">"transaction_id"</span>: <span class="hljs-number">6</span>,
    <span class="hljs-string">"transaction_date"</span>: <span class="hljs-string">"2020-5-7 15:20:22"</span>,
    <span class="hljs-string">"invoice_no"</span>: <span class="hljs-string">"qui"</span>,
    <span class="hljs-string">"discount_amount"</span>: <span class="hljs-number">10</span>,
    <span class="hljs-string">"discount_type"</span>: <span class="hljs-string">"fixed"</span>,
    <span class="hljs-string">"products"</span>: [
        {
            <span class="hljs-string">"sell_line_id"</span>: <span class="hljs-number">5</span>,
            <span class="hljs-string">"quantity"</span>: <span class="hljs-number">1</span>,
            <span class="hljs-string">"unit_price_inc_tax"</span>: <span class="hljs-number">437.5</span>
        }
    ]
}

fetch(url, {
    method: <span class="hljs-string">"POST"</span>,
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; <span class="hljs-built_in">console</span>.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json hljs">{
    "<span class="hljs-attr">id</span>": <span class="hljs-number">159</span>,
    "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
    "<span class="hljs-attr">location_id</span>": <span class="hljs-number">1</span>,
    "<span class="hljs-attr">res_table_id</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">res_waiter_id</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">res_order_status</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">type</span>": <span class="hljs-string">"sell_return"</span>,
    "<span class="hljs-attr">sub_type</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">status</span>": <span class="hljs-string">"final"</span>,
    "<span class="hljs-attr">is_quotation</span>": <span class="hljs-number">0</span>,
    "<span class="hljs-attr">payment_status</span>": <span class="hljs-string">"paid"</span>,
    "<span class="hljs-attr">adjustment_type</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">contact_id</span>": <span class="hljs-number">1</span>,
    "<span class="hljs-attr">customer_group_id</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">invoice_no</span>": <span class="hljs-string">"CN2020\/0005"</span>,
    "<span class="hljs-attr">ref_no</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">subscription_no</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">subscription_repeat_on</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">transaction_date</span>": <span class="hljs-string">"2020-11-17 00:00:00"</span>,
    "<span class="hljs-attr">total_before_tax</span>": <span class="hljs-number">3</span>,
    "<span class="hljs-attr">tax_id</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">tax_amount</span>": <span class="hljs-number">0</span>,
    "<span class="hljs-attr">discount_type</span>": <span class="hljs-string">"percentage"</span>,
    "<span class="hljs-attr">discount_amount</span>": <span class="hljs-number">12</span>,
    "<span class="hljs-attr">rp_redeemed</span>": <span class="hljs-number">0</span>,
    "<span class="hljs-attr">rp_redeemed_amount</span>": <span class="hljs-string">"0.0000"</span>,
    "<span class="hljs-attr">shipping_details</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">shipping_address</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">shipping_status</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">delivered_to</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">shipping_charges</span>": <span class="hljs-string">"0.0000"</span>,
    "<span class="hljs-attr">additional_notes</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">staff_note</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">round_off_amount</span>": <span class="hljs-string">"0.0000"</span>,
    "<span class="hljs-attr">final_total</span>": <span class="hljs-number">2.64</span>,
    "<span class="hljs-attr">expense_category_id</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">expense_for</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">commission_agent</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">document</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">is_direct_sale</span>": <span class="hljs-number">0</span>,
    "<span class="hljs-attr">is_suspend</span>": <span class="hljs-number">0</span>,
    "<span class="hljs-attr">exchange_rate</span>": <span class="hljs-string">"1.000"</span>,
    "<span class="hljs-attr">total_amount_recovered</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">transfer_parent_id</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">return_parent_id</span>": <span class="hljs-number">157</span>,
    "<span class="hljs-attr">opening_stock_product_id</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">created_by</span>": <span class="hljs-number">9</span>,
    "<span class="hljs-attr">import_batch</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">import_time</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">types_of_service_id</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">packing_charge</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">packing_charge_type</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">service_custom_field_1</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">service_custom_field_2</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">service_custom_field_3</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">service_custom_field_4</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">mfg_parent_production_purchase_id</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">mfg_wasted_units</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">mfg_production_cost</span>": <span class="hljs-string">"0.0000"</span>,
    "<span class="hljs-attr">mfg_production_cost_type</span>": <span class="hljs-string">"percentage"</span>,
    "<span class="hljs-attr">mfg_is_final</span>": <span class="hljs-number">0</span>,
    "<span class="hljs-attr">is_created_from_api</span>": <span class="hljs-number">0</span>,
    "<span class="hljs-attr">essentials_duration</span>": <span class="hljs-string">"0.00"</span>,
    "<span class="hljs-attr">essentials_duration_unit</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">essentials_amount_per_unit_duration</span>": <span class="hljs-string">"0.0000"</span>,
    "<span class="hljs-attr">essentials_allowances</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">essentials_deductions</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">rp_earned</span>": <span class="hljs-number">0</span>,
    "<span class="hljs-attr">repair_completed_on</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">repair_warranty_id</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">repair_brand_id</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">repair_status_id</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">repair_model_id</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">repair_job_sheet_id</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">repair_defects</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">repair_serial_no</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">repair_checklist</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">repair_security_pwd</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">repair_security_pattern</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">repair_due_date</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">repair_device_id</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">repair_updates_notif</span>": <span class="hljs-number">0</span>,
    "<span class="hljs-attr">order_addresses</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">is_recurring</span>": <span class="hljs-number">0</span>,
    "<span class="hljs-attr">recur_interval</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">recur_interval_type</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">recur_repetitions</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">recur_stopped_on</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">recur_parent_id</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">invoice_token</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">pay_term_number</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">pay_term_type</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">pjt_project_id</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">pjt_title</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">woocommerce_order_id</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">selling_price_group_id</span>": <span class="hljs-literal">null</span>,
    "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2020-11-17 12:05:11"</span>,
    "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2020-11-17 13:22:09"</span>
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST connector/api/sell-return</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>transaction_id</code></td>
<td>integer</td>
<td>required</td>
<td>Id of the sell</td>
</tr>
<tr>
<td><code>transaction_date</code></td>
<td>string</td>
<td>optional</td>
<td>transaction date format:Y-m-d H:i:s,</td>
</tr>
<tr>
<td><code>invoice_no</code></td>
<td>string</td>
<td>optional</td>
<td>Invoice number of the return</td>
</tr>
<tr>
<td><code>discount_amount</code></td>
<td>float</td>
<td>optional</td>
<td>discount amount applicable to the sale</td>
</tr>
<tr>
<td><code>discount_type</code></td>
<td>string</td>
<td>optional</td>
<td>type of the discount amount (fixed, percentage)</td>
</tr>
<tr>
<td><code>products</code></td>
<td>array</td>
<td>required</td>
<td>array of the products for the sale</td>
</tr>
<tr>
<td><code>products.*.sell_line_id</code></td>
<td>integer</td>
<td>required</td>
<td>sell line id</td>
</tr>
<tr>
<td><code>products.*.quantity</code></td>
<td>float</td>
<td>required</td>
<td>quantity to be returned from the sell line</td>
</tr>
<tr>
<td><code>products.*.unit_price_inc_tax</code></td>
<td>float</td>
<td>required</td>
<td>unit selling price of the returning item</td>
</tr>
</tbody>
</table>
<!-- END_915df593fed3a09da6acc3b2f4cce019 -->
<!-- START_65fedd88e348b2b300399869c8a4e299 -->
<div name="list-sell-return" data-unique="list-sell-return"></div><h2 id="list-sell-return">List Sell Return</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre style="display: block;"><code class="language-bash hljs">curl -X GET \
    -G <span class="hljs-string">"https://app.azhasoft.com/connector/api/list-sell-return"</span> \
    -H <span class="hljs-string">"Content-Type: application/json"</span> \
    -H <span class="hljs-string">"Accept: application/json"</span> \
    -H <span class="hljs-string">"Authorization: Bearer {token}"</span></code></pre>
<pre style="display: none;"><code class="language-javascript hljs"><span class="hljs-keyword">const</span> url = <span class="hljs-keyword">new</span> URL(
    <span class="hljs-string">"https://app.azhasoft.com/connector/api/list-sell-return"</span>
);

<span class="hljs-keyword">let</span> headers = {
    <span class="hljs-string">"Content-Type"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Accept"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Authorization"</span>: <span class="hljs-string">"Bearer {token}"</span>,
};

fetch(url, {
    method: <span class="hljs-string">"GET"</span>,
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; <span class="hljs-built_in">console</span>.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json hljs">{
    "<span class="hljs-attr">data</span>": [
        {
            "<span class="hljs-attr">id</span>": <span class="hljs-number">159</span>,
            "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">location_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">res_table_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">res_waiter_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">res_order_status</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">type</span>": <span class="hljs-string">"sell_return"</span>,
            "<span class="hljs-attr">sub_type</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">status</span>": <span class="hljs-string">"final"</span>,
            "<span class="hljs-attr">is_quotation</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">payment_status</span>": <span class="hljs-string">"partial"</span>,
            "<span class="hljs-attr">adjustment_type</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">contact_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">customer_group_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">invoice_no</span>": <span class="hljs-string">"CN2020\/0005"</span>,
            "<span class="hljs-attr">ref_no</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">subscription_no</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">subscription_repeat_on</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">transaction_date</span>": <span class="hljs-string">"2020-11-17 00:00:00"</span>,
            "<span class="hljs-attr">total_before_tax</span>": <span class="hljs-string">"3.0000"</span>,
            "<span class="hljs-attr">tax_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">tax_amount</span>": <span class="hljs-string">"0.0000"</span>,
            "<span class="hljs-attr">discount_type</span>": <span class="hljs-string">"percentage"</span>,
            "<span class="hljs-attr">discount_amount</span>": <span class="hljs-string">"12.0000"</span>,
            "<span class="hljs-attr">rp_redeemed</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">rp_redeemed_amount</span>": <span class="hljs-string">"0.0000"</span>,
            "<span class="hljs-attr">shipping_details</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">shipping_address</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">shipping_status</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">delivered_to</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">shipping_charges</span>": <span class="hljs-string">"0.0000"</span>,
            "<span class="hljs-attr">additional_notes</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">staff_note</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">round_off_amount</span>": <span class="hljs-string">"0.0000"</span>,
            "<span class="hljs-attr">final_total</span>": <span class="hljs-string">"2.6400"</span>,
            "<span class="hljs-attr">expense_category_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">expense_for</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">commission_agent</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">document</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">is_direct_sale</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">is_suspend</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">exchange_rate</span>": <span class="hljs-string">"1.000"</span>,
            "<span class="hljs-attr">total_amount_recovered</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">transfer_parent_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">return_parent_id</span>": <span class="hljs-number">157</span>,
            "<span class="hljs-attr">opening_stock_product_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">created_by</span>": <span class="hljs-number">9</span>,
            "<span class="hljs-attr">import_batch</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">import_time</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">types_of_service_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">packing_charge</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">packing_charge_type</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">service_custom_field_1</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">service_custom_field_2</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">service_custom_field_3</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">service_custom_field_4</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">mfg_parent_production_purchase_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">mfg_wasted_units</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">mfg_production_cost</span>": <span class="hljs-string">"0.0000"</span>,
            "<span class="hljs-attr">mfg_production_cost_type</span>": <span class="hljs-string">"percentage"</span>,
            "<span class="hljs-attr">mfg_is_final</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">is_created_from_api</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">essentials_duration</span>": <span class="hljs-string">"0.00"</span>,
            "<span class="hljs-attr">essentials_duration_unit</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">essentials_amount_per_unit_duration</span>": <span class="hljs-string">"0.0000"</span>,
            "<span class="hljs-attr">essentials_allowances</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">essentials_deductions</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">rp_earned</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">repair_completed_on</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">repair_warranty_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">repair_brand_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">repair_status_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">repair_model_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">repair_job_sheet_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">repair_defects</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">repair_serial_no</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">repair_checklist</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">repair_security_pwd</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">repair_security_pattern</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">repair_due_date</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">repair_device_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">repair_updates_notif</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">order_addresses</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">is_recurring</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">recur_interval</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">recur_interval_type</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">recur_repetitions</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">recur_stopped_on</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">recur_parent_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">invoice_token</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">pay_term_number</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">pay_term_type</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">pjt_project_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">pjt_title</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">woocommerce_order_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">selling_price_group_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2020-11-17 12:05:11"</span>,
            "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2020-11-17 13:22:09"</span>,
            "<span class="hljs-attr">payment_lines</span>": [
                {
                    "<span class="hljs-attr">id</span>": <span class="hljs-number">126</span>,
                    "<span class="hljs-attr">transaction_id</span>": <span class="hljs-number">159</span>,
                    "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
                    "<span class="hljs-attr">is_return</span>": <span class="hljs-number">0</span>,
                    "<span class="hljs-attr">amount</span>": <span class="hljs-string">"1.8000"</span>,
                    "<span class="hljs-attr">method</span>": <span class="hljs-string">"cash"</span>,
                    "<span class="hljs-attr">transaction_no</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">card_transaction_number</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">card_number</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">card_type</span>": <span class="hljs-string">"credit"</span>,
                    "<span class="hljs-attr">card_holder_name</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">card_month</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">card_year</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">card_security</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">cheque_number</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">bank_account_number</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">paid_on</span>": <span class="hljs-string">"2020-11-17 12:05:00"</span>,
                    "<span class="hljs-attr">created_by</span>": <span class="hljs-number">9</span>,
                    "<span class="hljs-attr">is_advance</span>": <span class="hljs-number">0</span>,
                    "<span class="hljs-attr">payment_for</span>": <span class="hljs-number">1</span>,
                    "<span class="hljs-attr">parent_id</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">note</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">document</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">payment_ref_no</span>": <span class="hljs-string">"SP2020\/0078"</span>,
                    "<span class="hljs-attr">account_id</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2020-11-17 12:05:58"</span>,
                    "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2020-11-17 12:05:58"</span>
                }
            ],
            "<span class="hljs-attr">return_parent_sell</span>": {
                "<span class="hljs-attr">id</span>": <span class="hljs-number">157</span>,
                "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
                "<span class="hljs-attr">location_id</span>": <span class="hljs-number">1</span>,
                "<span class="hljs-attr">res_table_id</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">res_waiter_id</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">res_order_status</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">type</span>": <span class="hljs-string">"sell"</span>,
                "<span class="hljs-attr">sub_type</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">status</span>": <span class="hljs-string">"final"</span>,
                "<span class="hljs-attr">is_quotation</span>": <span class="hljs-number">0</span>,
                "<span class="hljs-attr">payment_status</span>": <span class="hljs-string">"paid"</span>,
                "<span class="hljs-attr">adjustment_type</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">contact_id</span>": <span class="hljs-number">1</span>,
                "<span class="hljs-attr">customer_group_id</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">invoice_no</span>": <span class="hljs-string">"AS0073"</span>,
                "<span class="hljs-attr">ref_no</span>": <span class="hljs-string">""</span>,
                "<span class="hljs-attr">subscription_no</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">subscription_repeat_on</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">transaction_date</span>": <span class="hljs-string">"2020-11-13 12:42:17"</span>,
                "<span class="hljs-attr">total_before_tax</span>": <span class="hljs-string">"6.2500"</span>,
                "<span class="hljs-attr">tax_id</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">tax_amount</span>": <span class="hljs-string">"0.0000"</span>,
                "<span class="hljs-attr">discount_type</span>": <span class="hljs-string">"percentage"</span>,
                "<span class="hljs-attr">discount_amount</span>": <span class="hljs-string">"10.0000"</span>,
                "<span class="hljs-attr">rp_redeemed</span>": <span class="hljs-number">0</span>,
                "<span class="hljs-attr">rp_redeemed_amount</span>": <span class="hljs-string">"0.0000"</span>,
                "<span class="hljs-attr">shipping_details</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">shipping_address</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">shipping_status</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">delivered_to</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">shipping_charges</span>": <span class="hljs-string">"0.0000"</span>,
                "<span class="hljs-attr">additional_notes</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">staff_note</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">round_off_amount</span>": <span class="hljs-string">"0.0000"</span>,
                "<span class="hljs-attr">final_total</span>": <span class="hljs-string">"5.6300"</span>,
                "<span class="hljs-attr">expense_category_id</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">expense_for</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">commission_agent</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">document</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">is_direct_sale</span>": <span class="hljs-number">0</span>,
                "<span class="hljs-attr">is_suspend</span>": <span class="hljs-number">0</span>,
                "<span class="hljs-attr">exchange_rate</span>": <span class="hljs-string">"1.000"</span>,
                "<span class="hljs-attr">total_amount_recovered</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">transfer_parent_id</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">return_parent_id</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">opening_stock_product_id</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">created_by</span>": <span class="hljs-number">9</span>,
                "<span class="hljs-attr">import_batch</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">import_time</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">types_of_service_id</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">packing_charge</span>": <span class="hljs-string">"0.0000"</span>,
                "<span class="hljs-attr">packing_charge_type</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">service_custom_field_1</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">service_custom_field_2</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">service_custom_field_3</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">service_custom_field_4</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">mfg_parent_production_purchase_id</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">mfg_wasted_units</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">mfg_production_cost</span>": <span class="hljs-string">"0.0000"</span>,
                "<span class="hljs-attr">mfg_production_cost_type</span>": <span class="hljs-string">"percentage"</span>,
                "<span class="hljs-attr">mfg_is_final</span>": <span class="hljs-number">0</span>,
                "<span class="hljs-attr">is_created_from_api</span>": <span class="hljs-number">0</span>,
                "<span class="hljs-attr">essentials_duration</span>": <span class="hljs-string">"0.00"</span>,
                "<span class="hljs-attr">essentials_duration_unit</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">essentials_amount_per_unit_duration</span>": <span class="hljs-string">"0.0000"</span>,
                "<span class="hljs-attr">essentials_allowances</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">essentials_deductions</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">rp_earned</span>": <span class="hljs-number">0</span>,
                "<span class="hljs-attr">repair_completed_on</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">repair_warranty_id</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">repair_brand_id</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">repair_status_id</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">repair_model_id</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">repair_job_sheet_id</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">repair_defects</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">repair_serial_no</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">repair_checklist</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">repair_security_pwd</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">repair_security_pattern</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">repair_due_date</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">repair_device_id</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">repair_updates_notif</span>": <span class="hljs-number">0</span>,
                "<span class="hljs-attr">order_addresses</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">is_recurring</span>": <span class="hljs-number">0</span>,
                "<span class="hljs-attr">recur_interval</span>": <span class="hljs-number">1</span>,
                "<span class="hljs-attr">recur_interval_type</span>": <span class="hljs-string">"days"</span>,
                "<span class="hljs-attr">recur_repetitions</span>": <span class="hljs-number">0</span>,
                "<span class="hljs-attr">recur_stopped_on</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">recur_parent_id</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">invoice_token</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">pay_term_number</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">pay_term_type</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">pjt_project_id</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">pjt_title</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">woocommerce_order_id</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">selling_price_group_id</span>": <span class="hljs-number">0</span>,
                "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2020-11-13 12:42:17"</span>,
                "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2020-11-13 12:42:18"</span>,
                "<span class="hljs-attr">sell_lines</span>": [
                    {
                        "<span class="hljs-attr">id</span>": <span class="hljs-number">139</span>,
                        "<span class="hljs-attr">transaction_id</span>": <span class="hljs-number">157</span>,
                        "<span class="hljs-attr">product_id</span>": <span class="hljs-number">157</span>,
                        "<span class="hljs-attr">variation_id</span>": <span class="hljs-number">205</span>,
                        "<span class="hljs-attr">quantity</span>": <span class="hljs-number">5</span>,
                        "<span class="hljs-attr">mfg_waste_percent</span>": <span class="hljs-string">"0.0000"</span>,
                        "<span class="hljs-attr">quantity_returned</span>": <span class="hljs-string">"3.0000"</span>,
                        "<span class="hljs-attr">unit_price_before_discount</span>": <span class="hljs-string">"1.2500"</span>,
                        "<span class="hljs-attr">unit_price</span>": <span class="hljs-string">"1.2500"</span>,
                        "<span class="hljs-attr">line_discount_type</span>": <span class="hljs-string">"fixed"</span>,
                        "<span class="hljs-attr">line_discount_amount</span>": <span class="hljs-string">"0.0000"</span>,
                        "<span class="hljs-attr">unit_price_inc_tax</span>": <span class="hljs-string">"1.2500"</span>,
                        "<span class="hljs-attr">item_tax</span>": <span class="hljs-string">"0.0000"</span>,
                        "<span class="hljs-attr">tax_id</span>": <span class="hljs-literal">null</span>,
                        "<span class="hljs-attr">discount_id</span>": <span class="hljs-literal">null</span>,
                        "<span class="hljs-attr">lot_no_line_id</span>": <span class="hljs-literal">null</span>,
                        "<span class="hljs-attr">sell_line_note</span>": <span class="hljs-string">""</span>,
                        "<span class="hljs-attr">res_service_staff_id</span>": <span class="hljs-literal">null</span>,
                        "<span class="hljs-attr">res_line_order_status</span>": <span class="hljs-literal">null</span>,
                        "<span class="hljs-attr">woocommerce_line_items_id</span>": <span class="hljs-literal">null</span>,
                        "<span class="hljs-attr">parent_sell_line_id</span>": <span class="hljs-literal">null</span>,
                        "<span class="hljs-attr">children_type</span>": <span class="hljs-string">""</span>,
                        "<span class="hljs-attr">sub_unit_id</span>": <span class="hljs-literal">null</span>,
                        "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2020-11-13 12:42:17"</span>,
                        "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2020-11-17 13:22:09"</span>
                    }
                ]
            }
        }
    ],
    "<span class="hljs-attr">links</span>": {
        "<span class="hljs-attr">first</span>": <span class="hljs-string">"http:\/\/local.pos.com\/connector\/api\/list-sell-return?sell_id=157&amp;page=1"</span>,
        "<span class="hljs-attr">last</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">prev</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">next</span>": <span class="hljs-literal">null</span>
    },
    "<span class="hljs-attr">meta</span>": {
        "<span class="hljs-attr">current_page</span>": <span class="hljs-number">1</span>,
        "<span class="hljs-attr">from</span>": <span class="hljs-number">1</span>,
        "<span class="hljs-attr">path</span>": <span class="hljs-string">"http:\/\/local.pos.com\/connector\/api\/list-sell-return"</span>,
        "<span class="hljs-attr">per_page</span>": <span class="hljs-number">10</span>,
        "<span class="hljs-attr">to</span>": <span class="hljs-number">1</span>
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET connector/api/list-sell-return</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>sell_id</code></td>
<td>optional</td>
<td>Id of the sell for which return is added</td>
</tr>
</tbody>
</table>
<!-- END_65fedd88e348b2b300399869c8a4e299 -->
<!-- START_13d1efb0e363abdb0c1d2b6b1b538cfd -->
<div name="update-shipping-status" data-unique="update-shipping-status"></div><h2 id="update-shipping-status">Update shipping status</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre style="display: block;"><code class="language-bash hljs">curl -X POST \
    <span class="hljs-string">"https://app.azhasoft.com/connector/api/update-shipping-status"</span> \
    -H <span class="hljs-string">"Content-Type: application/json"</span> \
    -H <span class="hljs-string">"Accept: application/json"</span> \
    -H <span class="hljs-string">"Authorization: Bearer {token}"</span> \
    <span class="hljs-_">-d</span> <span class="hljs-string">'{"id":20,"shipping_status":"ordered","delivered_to":"beatae"}'</span>
</code></pre>
<pre style="display: none;"><code class="language-javascript hljs"><span class="hljs-keyword">const</span> url = <span class="hljs-keyword">new</span> URL(
    <span class="hljs-string">"https://app.azhasoft.com/connector/api/update-shipping-status"</span>
);

<span class="hljs-keyword">let</span> headers = {
    <span class="hljs-string">"Content-Type"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Accept"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Authorization"</span>: <span class="hljs-string">"Bearer {token}"</span>,
};

<span class="hljs-keyword">let</span> body = {
    <span class="hljs-string">"id"</span>: <span class="hljs-number">20</span>,
    <span class="hljs-string">"shipping_status"</span>: <span class="hljs-string">"ordered"</span>,
    <span class="hljs-string">"delivered_to"</span>: <span class="hljs-string">"beatae"</span>
}

fetch(url, {
    method: <span class="hljs-string">"POST"</span>,
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; <span class="hljs-built_in">console</span>.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST connector/api/update-shipping-status</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>id</code></td>
<td>integer</td>
<td>required</td>
<td>id of the sale</td>
</tr>
<tr>
<td><code>shipping_status</code></td>
<td>string</td>
<td>optional</td>
<td>('ordered', 'packed', 'shipped', 'delivered', 'cancelled')</td>
</tr>
<tr>
<td><code>delivered_to</code></td>
<td>string</td>
<td>optional</td>
<td>Name of the consignee</td>
</tr>
</tbody>
</table>
<!-- END_13d1efb0e363abdb0c1d2b6b1b538cfd -->
<div name="superadmin" data-unique="superadmin"></div><h1 id="superadmin">Superadmin</h1>
<!-- START_9c3766fcfc8903a5407f756fa5d6a6ac -->
<div name="get-active-subscription-details" data-unique="get-active-subscription-details"></div><h2 id="get-active-subscription-details">Get active subscription details</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre style="display: block;"><code class="language-bash hljs">curl -X GET \
    -G <span class="hljs-string">"https://app.azhasoft.com/connector/api/active-subscription"</span> \
    -H <span class="hljs-string">"Content-Type: application/json"</span> \
    -H <span class="hljs-string">"Accept: application/json"</span> \
    -H <span class="hljs-string">"Authorization: Bearer {token}"</span></code></pre>
<pre style="display: none;"><code class="language-javascript hljs"><span class="hljs-keyword">const</span> url = <span class="hljs-keyword">new</span> URL(
    <span class="hljs-string">"https://app.azhasoft.com/connector/api/active-subscription"</span>
);

<span class="hljs-keyword">let</span> headers = {
    <span class="hljs-string">"Content-Type"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Accept"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Authorization"</span>: <span class="hljs-string">"Bearer {token}"</span>,
};

fetch(url, {
    method: <span class="hljs-string">"GET"</span>,
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; <span class="hljs-built_in">console</span>.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json hljs">{
    "<span class="hljs-attr">data</span>": {
        "<span class="hljs-attr">id</span>": <span class="hljs-number">1</span>,
        "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
        "<span class="hljs-attr">package_id</span>": <span class="hljs-number">3</span>,
        "<span class="hljs-attr">start_date</span>": <span class="hljs-string">"2020-09-05 00:00:00"</span>,
        "<span class="hljs-attr">trial_end_date</span>": <span class="hljs-string">"2020-09-15"</span>,
        "<span class="hljs-attr">end_date</span>": <span class="hljs-string">"2020-10-05 00:00:00"</span>,
        "<span class="hljs-attr">package_price</span>": <span class="hljs-string">"599.9900"</span>,
        "<span class="hljs-attr">package_details</span>": {
            "<span class="hljs-attr">location_count</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">user_count</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">product_count</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">invoice_count</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">name</span>": <span class="hljs-string">"Unlimited"</span>,
            "<span class="hljs-attr">woocommerce_module</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">essentials_module</span>": <span class="hljs-number">1</span>
        },
        "<span class="hljs-attr">created_id</span>": <span class="hljs-number">1</span>,
        "<span class="hljs-attr">paid_via</span>": <span class="hljs-string">"stripe"</span>,
        "<span class="hljs-attr">payment_transaction_id</span>": <span class="hljs-string">"ch_1CuLdQAhokBpT93LVZNg2At6"</span>,
        "<span class="hljs-attr">status</span>": <span class="hljs-string">"approved"</span>,
        "<span class="hljs-attr">deleted_at</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2018-08-01 07:49:09"</span>,
        "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2018-08-01 07:49:09"</span>,
        "<span class="hljs-attr">locations_created</span>": <span class="hljs-number">1</span>,
        "<span class="hljs-attr">users_created</span>": <span class="hljs-number">6</span>,
        "<span class="hljs-attr">products_created</span>": <span class="hljs-number">2</span>,
        "<span class="hljs-attr">invoices_created</span>": <span class="hljs-number">1</span>
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET connector/api/active-subscription</code></p>
<!-- END_9c3766fcfc8903a5407f756fa5d6a6ac -->
<!-- START_f5b3230edac6232bb97641903e95ef57 -->
<div name="get-superadmin-package-list" data-unique="get-superadmin-package-list"></div><h2 id="get-superadmin-package-list">Get Superadmin Package List</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre style="display: block;"><code class="language-bash hljs">curl -X GET \
    -G <span class="hljs-string">"https://app.azhasoft.com/connector/api/packages"</span> \
    -H <span class="hljs-string">"Content-Type: application/json"</span> \
    -H <span class="hljs-string">"Accept: application/json"</span> \
    -H <span class="hljs-string">"Authorization: Bearer {token}"</span></code></pre>
<pre style="display: none;"><code class="language-javascript hljs"><span class="hljs-keyword">const</span> url = <span class="hljs-keyword">new</span> URL(
    <span class="hljs-string">"https://app.azhasoft.com/connector/api/packages"</span>
);

<span class="hljs-keyword">let</span> headers = {
    <span class="hljs-string">"Content-Type"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Accept"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Authorization"</span>: <span class="hljs-string">"Bearer {token}"</span>,
};

fetch(url, {
    method: <span class="hljs-string">"GET"</span>,
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; <span class="hljs-built_in">console</span>.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json hljs">{
    "<span class="hljs-attr">data</span>": [
        {
            "<span class="hljs-attr">id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">name</span>": <span class="hljs-string">"Starter - Free"</span>,
            "<span class="hljs-attr">description</span>": <span class="hljs-string">"Give it a test drive..."</span>,
            "<span class="hljs-attr">location_count</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">user_count</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">product_count</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">bookings</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">kitchen</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">order_screen</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">tables</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">invoice_count</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">interval</span>": <span class="hljs-string">"months"</span>,
            "<span class="hljs-attr">interval_count</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">trial_days</span>": <span class="hljs-number">10</span>,
            "<span class="hljs-attr">price</span>": <span class="hljs-string">"0.0000"</span>,
            "<span class="hljs-attr">custom_permissions</span>": {
                "<span class="hljs-attr">assetmanagement_module</span>": <span class="hljs-string">"1"</span>,
                "<span class="hljs-attr">connector_module</span>": <span class="hljs-string">"1"</span>,
                "<span class="hljs-attr">crm_module</span>": <span class="hljs-string">"1"</span>,
                "<span class="hljs-attr">essentials_module</span>": <span class="hljs-string">"1"</span>,
                "<span class="hljs-attr">manufacturing_module</span>": <span class="hljs-string">"1"</span>,
                "<span class="hljs-attr">productcatalogue_module</span>": <span class="hljs-string">"1"</span>,
                "<span class="hljs-attr">project_module</span>": <span class="hljs-string">"1"</span>,
                "<span class="hljs-attr">repair_module</span>": <span class="hljs-string">"1"</span>,
                "<span class="hljs-attr">woocommerce_module</span>": <span class="hljs-string">"1"</span>
            },
            "<span class="hljs-attr">created_by</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">sort_order</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">is_active</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">is_private</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">is_one_time</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">enable_custom_link</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">custom_link</span>": <span class="hljs-string">""</span>,
            "<span class="hljs-attr">custom_link_text</span>": <span class="hljs-string">""</span>,
            "<span class="hljs-attr">deleted_at</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2020-10-09 16:38:02"</span>,
            "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2020-11-11 12:19:17"</span>
        },
        {
            "<span class="hljs-attr">id</span>": <span class="hljs-number">2</span>,
            "<span class="hljs-attr">name</span>": <span class="hljs-string">"Regular"</span>,
            "<span class="hljs-attr">description</span>": <span class="hljs-string">"For Small Shops"</span>,
            "<span class="hljs-attr">location_count</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">user_count</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">product_count</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">bookings</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">kitchen</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">order_screen</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">tables</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">invoice_count</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">interval</span>": <span class="hljs-string">"months"</span>,
            "<span class="hljs-attr">interval_count</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">trial_days</span>": <span class="hljs-number">10</span>,
            "<span class="hljs-attr">price</span>": <span class="hljs-string">"199.9900"</span>,
            "<span class="hljs-attr">custom_permissions</span>": {
                "<span class="hljs-attr">repair_module</span>": <span class="hljs-string">"1"</span>
            },
            "<span class="hljs-attr">created_by</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">sort_order</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">is_active</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">is_private</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">is_one_time</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">enable_custom_link</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">custom_link</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">custom_link_text</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">deleted_at</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2020-10-09 16:38:02"</span>,
            "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2020-10-09 16:38:02"</span>
        },
        {
            "<span class="hljs-attr">id</span>": <span class="hljs-number">3</span>,
            "<span class="hljs-attr">name</span>": <span class="hljs-string">"Unlimited"</span>,
            "<span class="hljs-attr">description</span>": <span class="hljs-string">"For Large Business"</span>,
            "<span class="hljs-attr">location_count</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">user_count</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">product_count</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">bookings</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">kitchen</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">order_screen</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">tables</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">invoice_count</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">interval</span>": <span class="hljs-string">"months"</span>,
            "<span class="hljs-attr">interval_count</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">trial_days</span>": <span class="hljs-number">10</span>,
            "<span class="hljs-attr">price</span>": <span class="hljs-string">"599.9900"</span>,
            "<span class="hljs-attr">custom_permissions</span>": {
                "<span class="hljs-attr">assetmanagement_module</span>": <span class="hljs-string">"1"</span>,
                "<span class="hljs-attr">connector_module</span>": <span class="hljs-string">"1"</span>,
                "<span class="hljs-attr">crm_module</span>": <span class="hljs-string">"1"</span>,
                "<span class="hljs-attr">essentials_module</span>": <span class="hljs-string">"1"</span>,
                "<span class="hljs-attr">manufacturing_module</span>": <span class="hljs-string">"1"</span>,
                "<span class="hljs-attr">productcatalogue_module</span>": <span class="hljs-string">"1"</span>,
                "<span class="hljs-attr">project_module</span>": <span class="hljs-string">"1"</span>,
                "<span class="hljs-attr">repair_module</span>": <span class="hljs-string">"1"</span>,
                "<span class="hljs-attr">woocommerce_module</span>": <span class="hljs-string">"1"</span>
            },
            "<span class="hljs-attr">created_by</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">sort_order</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">is_active</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">is_private</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">is_one_time</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">enable_custom_link</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">custom_link</span>": <span class="hljs-string">""</span>,
            "<span class="hljs-attr">custom_link_text</span>": <span class="hljs-string">""</span>,
            "<span class="hljs-attr">deleted_at</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2020-10-09 16:38:02"</span>,
            "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2020-11-02 12:09:19"</span>
        }
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET connector/api/packages</code></p>
<!-- END_f5b3230edac6232bb97641903e95ef57 -->
<div name="table-management" data-unique="table-management"></div><h1 id="table-management">Table management</h1>
<!-- START_b0940bb5148ed593b38ecffd6d0524d4 -->
<div name="list-tables" data-unique="list-tables"></div><h2 id="list-tables">List tables</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre style="display: block;"><code class="language-bash hljs">curl -X GET \
    -G <span class="hljs-string">"https://app.azhasoft.com/connector/api/table?location_id=velit"</span> \
    -H <span class="hljs-string">"Content-Type: application/json"</span> \
    -H <span class="hljs-string">"Accept: application/json"</span> \
    -H <span class="hljs-string">"Authorization: Bearer {token}"</span></code></pre>
<pre style="display: none;"><code class="language-javascript hljs"><span class="hljs-keyword">const</span> url = <span class="hljs-keyword">new</span> URL(
    <span class="hljs-string">"https://app.azhasoft.com/connector/api/table"</span>
);

<span class="hljs-keyword">let</span> params = {
    <span class="hljs-string">"location_id"</span>: <span class="hljs-string">"velit"</span>,
};
<span class="hljs-built_in">Object</span>.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

<span class="hljs-keyword">let</span> headers = {
    <span class="hljs-string">"Content-Type"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Accept"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Authorization"</span>: <span class="hljs-string">"Bearer {token}"</span>,
};

fetch(url, {
    method: <span class="hljs-string">"GET"</span>,
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; <span class="hljs-built_in">console</span>.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json hljs">{
    "<span class="hljs-attr">data</span>": [
        {
            "<span class="hljs-attr">id</span>": <span class="hljs-number">5</span>,
            "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">location_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">name</span>": <span class="hljs-string">"Table 1"</span>,
            "<span class="hljs-attr">description</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">created_by</span>": <span class="hljs-number">9</span>,
            "<span class="hljs-attr">deleted_at</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2020-06-04 22:36:37"</span>,
            "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2020-06-04 22:36:37"</span>
        }
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET connector/api/table</code></p>
<h4>Query Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>location_id</code></td>
<td>optional</td>
<td>int id of the location</td>
</tr>
</tbody>
</table>
<!-- END_b0940bb5148ed593b38ecffd6d0524d4 -->
<!-- START_74a747cca362ed29880939bd55a57127 -->
<div name="show-the-specified-table" data-unique="show-the-specified-table"></div><h2 id="show-the-specified-table">Show the specified table</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre style="display: block;"><code class="language-bash hljs">curl -X GET \
    -G <span class="hljs-string">"https://app.azhasoft.com/connector/api/table/5"</span> \
    -H <span class="hljs-string">"Content-Type: application/json"</span> \
    -H <span class="hljs-string">"Accept: application/json"</span> \
    -H <span class="hljs-string">"Authorization: Bearer {token}"</span></code></pre>
<pre style="display: none;"><code class="language-javascript hljs"><span class="hljs-keyword">const</span> url = <span class="hljs-keyword">new</span> URL(
    <span class="hljs-string">"https://app.azhasoft.com/connector/api/table/5"</span>
);

<span class="hljs-keyword">let</span> headers = {
    <span class="hljs-string">"Content-Type"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Accept"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Authorization"</span>: <span class="hljs-string">"Bearer {token}"</span>,
};

fetch(url, {
    method: <span class="hljs-string">"GET"</span>,
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; <span class="hljs-built_in">console</span>.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json hljs">{
    "<span class="hljs-attr">data</span>": [
        {
            "<span class="hljs-attr">id</span>": <span class="hljs-number">5</span>,
            "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">location_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">name</span>": <span class="hljs-string">"Table 1"</span>,
            "<span class="hljs-attr">description</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">created_by</span>": <span class="hljs-number">9</span>,
            "<span class="hljs-attr">deleted_at</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2020-06-04 22:36:37"</span>,
            "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2020-06-04 22:36:37"</span>
        }
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET connector/api/table/{table}</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>table</code></td>
<td>required</td>
<td>comma separated ids of required tables</td>
</tr>
</tbody>
</table>
<!-- END_74a747cca362ed29880939bd55a57127 -->
<div name="tax-management" data-unique="tax-management"></div><h1 id="tax-management">Tax management</h1>
<!-- START_f9b364a9748fed0253f02b17a450703d -->
<div name="list-taxes" data-unique="list-taxes"></div><h2 id="list-taxes">List taxes</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre style="display: block;"><code class="language-bash hljs">curl -X GET \
    -G <span class="hljs-string">"https://app.azhasoft.com/connector/api/tax"</span> \
    -H <span class="hljs-string">"Content-Type: application/json"</span> \
    -H <span class="hljs-string">"Accept: application/json"</span> \
    -H <span class="hljs-string">"Authorization: Bearer {token}"</span></code></pre>
<pre style="display: none;"><code class="language-javascript hljs"><span class="hljs-keyword">const</span> url = <span class="hljs-keyword">new</span> URL(
    <span class="hljs-string">"https://app.azhasoft.com/connector/api/tax"</span>
);

<span class="hljs-keyword">let</span> headers = {
    <span class="hljs-string">"Content-Type"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Accept"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Authorization"</span>: <span class="hljs-string">"Bearer {token}"</span>,
};

fetch(url, {
    method: <span class="hljs-string">"GET"</span>,
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; <span class="hljs-built_in">console</span>.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json hljs">{
    "<span class="hljs-attr">data</span>": [
        {
            "<span class="hljs-attr">id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">name</span>": <span class="hljs-string">"VAT@10%"</span>,
            "<span class="hljs-attr">amount</span>": <span class="hljs-number">10</span>,
            "<span class="hljs-attr">is_tax_group</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">created_by</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">woocommerce_tax_rate_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">deleted_at</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2018-01-04 02:40:07"</span>,
            "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2018-01-04 02:40:07"</span>
        },
        {
            "<span class="hljs-attr">id</span>": <span class="hljs-number">2</span>,
            "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">name</span>": <span class="hljs-string">"CGST@10%"</span>,
            "<span class="hljs-attr">amount</span>": <span class="hljs-number">10</span>,
            "<span class="hljs-attr">is_tax_group</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">created_by</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">woocommerce_tax_rate_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">deleted_at</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2018-01-04 02:40:55"</span>,
            "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2018-01-04 02:40:55"</span>
        },
        {
            "<span class="hljs-attr">id</span>": <span class="hljs-number">3</span>,
            "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">name</span>": <span class="hljs-string">"SGST@8%"</span>,
            "<span class="hljs-attr">amount</span>": <span class="hljs-number">8</span>,
            "<span class="hljs-attr">is_tax_group</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">created_by</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">woocommerce_tax_rate_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">deleted_at</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2018-01-04 02:41:13"</span>,
            "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2018-01-04 02:41:13"</span>
        },
        {
            "<span class="hljs-attr">id</span>": <span class="hljs-number">4</span>,
            "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">name</span>": <span class="hljs-string">"GST@18%"</span>,
            "<span class="hljs-attr">amount</span>": <span class="hljs-number">18</span>,
            "<span class="hljs-attr">is_tax_group</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">created_by</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">woocommerce_tax_rate_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">deleted_at</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2018-01-04 02:42:19"</span>,
            "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2018-01-04 02:42:19"</span>
        }
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET connector/api/tax</code></p>
<!-- END_f9b364a9748fed0253f02b17a450703d -->
<!-- START_930b84e999710cdc95d8205b1054a595 -->
<div name="get-the-specified-tax" data-unique="get-the-specified-tax"></div><h2 id="get-the-specified-tax">Get the specified tax</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre style="display: block;"><code class="language-bash hljs">curl -X GET \
    -G <span class="hljs-string">"https://app.azhasoft.com/connector/api/tax/1"</span> \
    -H <span class="hljs-string">"Content-Type: application/json"</span> \
    -H <span class="hljs-string">"Accept: application/json"</span> \
    -H <span class="hljs-string">"Authorization: Bearer {token}"</span></code></pre>
<pre style="display: none;"><code class="language-javascript hljs"><span class="hljs-keyword">const</span> url = <span class="hljs-keyword">new</span> URL(
    <span class="hljs-string">"https://app.azhasoft.com/connector/api/tax/1"</span>
);

<span class="hljs-keyword">let</span> headers = {
    <span class="hljs-string">"Content-Type"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Accept"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Authorization"</span>: <span class="hljs-string">"Bearer {token}"</span>,
};

fetch(url, {
    method: <span class="hljs-string">"GET"</span>,
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; <span class="hljs-built_in">console</span>.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json hljs">{
    "<span class="hljs-attr">data</span>": [
        {
            "<span class="hljs-attr">id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">name</span>": <span class="hljs-string">"VAT@10%"</span>,
            "<span class="hljs-attr">amount</span>": <span class="hljs-number">10</span>,
            "<span class="hljs-attr">is_tax_group</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">created_by</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">woocommerce_tax_rate_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">deleted_at</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2018-01-04 02:40:07"</span>,
            "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2018-01-04 02:40:07"</span>
        }
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET connector/api/tax/{tax}</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>tax</code></td>
<td>required</td>
<td>comma separated ids of required taxes</td>
</tr>
</tbody>
</table>
<!-- END_930b84e999710cdc95d8205b1054a595 -->
<div name="taxonomy-management" data-unique="taxonomy-management"></div><h1 id="taxonomy-management">Taxonomy management</h1>
<!-- START_f8494c9a746f2982f51e344563b475a8 -->
<div name="list-taxonomy" data-unique="list-taxonomy"></div><h2 id="list-taxonomy">List taxonomy</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre style="display: block;"><code class="language-bash hljs">curl -X GET \
    -G <span class="hljs-string">"https://app.azhasoft.com/connector/api/taxonomy?type=quia"</span> \
    -H <span class="hljs-string">"Content-Type: application/json"</span> \
    -H <span class="hljs-string">"Accept: application/json"</span> \
    -H <span class="hljs-string">"Authorization: Bearer {token}"</span></code></pre>
<pre style="display: none;"><code class="language-javascript hljs"><span class="hljs-keyword">const</span> url = <span class="hljs-keyword">new</span> URL(
    <span class="hljs-string">"https://app.azhasoft.com/connector/api/taxonomy"</span>
);

<span class="hljs-keyword">let</span> params = {
    <span class="hljs-string">"type"</span>: <span class="hljs-string">"quia"</span>,
};
<span class="hljs-built_in">Object</span>.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

<span class="hljs-keyword">let</span> headers = {
    <span class="hljs-string">"Content-Type"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Accept"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Authorization"</span>: <span class="hljs-string">"Bearer {token}"</span>,
};

fetch(url, {
    method: <span class="hljs-string">"GET"</span>,
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; <span class="hljs-built_in">console</span>.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json hljs">{
    "<span class="hljs-attr">data</span>": [
        {
            "<span class="hljs-attr">id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">name</span>": <span class="hljs-string">"Men's"</span>,
            "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">short_code</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">parent_id</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">created_by</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">category_type</span>": <span class="hljs-string">"product"</span>,
            "<span class="hljs-attr">description</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">slug</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">woocommerce_cat_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">deleted_at</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2018-01-03 21:06:34"</span>,
            "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2018-01-03 21:06:34"</span>,
            "<span class="hljs-attr">sub_categories</span>": [
                {
                    "<span class="hljs-attr">id</span>": <span class="hljs-number">4</span>,
                    "<span class="hljs-attr">name</span>": <span class="hljs-string">"Jeans"</span>,
                    "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
                    "<span class="hljs-attr">short_code</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">parent_id</span>": <span class="hljs-number">1</span>,
                    "<span class="hljs-attr">created_by</span>": <span class="hljs-number">1</span>,
                    "<span class="hljs-attr">category_type</span>": <span class="hljs-string">"product"</span>,
                    "<span class="hljs-attr">description</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">slug</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">woocommerce_cat_id</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">deleted_at</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2018-01-03 21:07:34"</span>,
                    "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2018-01-03 21:07:34"</span>
                },
                {
                    "<span class="hljs-attr">id</span>": <span class="hljs-number">5</span>,
                    "<span class="hljs-attr">name</span>": <span class="hljs-string">"Shirts"</span>,
                    "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
                    "<span class="hljs-attr">short_code</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">parent_id</span>": <span class="hljs-number">1</span>,
                    "<span class="hljs-attr">created_by</span>": <span class="hljs-number">1</span>,
                    "<span class="hljs-attr">category_type</span>": <span class="hljs-string">"product"</span>,
                    "<span class="hljs-attr">description</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">slug</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">woocommerce_cat_id</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">deleted_at</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2018-01-03 21:08:18"</span>,
                    "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2018-01-03 21:08:18"</span>
                }
            ]
        },
        {
            "<span class="hljs-attr">id</span>": <span class="hljs-number">21</span>,
            "<span class="hljs-attr">name</span>": <span class="hljs-string">"Food &amp; Grocery"</span>,
            "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">short_code</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">parent_id</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">created_by</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">category_type</span>": <span class="hljs-string">"product"</span>,
            "<span class="hljs-attr">description</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">slug</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">woocommerce_cat_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">deleted_at</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2018-01-06 05:31:35"</span>,
            "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2018-01-06 05:31:35"</span>,
            "<span class="hljs-attr">sub_categories</span>": []
        }
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET connector/api/taxonomy</code></p>
<h4>Query Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>type</code></td>
<td>optional</td>
<td>Type of taxonomy (product, device, hrm_department)</td>
</tr>
</tbody>
</table>
<!-- END_f8494c9a746f2982f51e344563b475a8 -->
<!-- START_b928b0227f535bab611da00bc247f60c -->
<div name="get-the-specified-taxonomy" data-unique="get-the-specified-taxonomy"></div><h2 id="get-the-specified-taxonomy">Get the specified taxonomy</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre style="display: block;"><code class="language-bash hljs">curl -X GET \
    -G <span class="hljs-string">"https://app.azhasoft.com/connector/api/taxonomy/1"</span> \
    -H <span class="hljs-string">"Content-Type: application/json"</span> \
    -H <span class="hljs-string">"Accept: application/json"</span> \
    -H <span class="hljs-string">"Authorization: Bearer {token}"</span></code></pre>
<pre style="display: none;"><code class="language-javascript hljs"><span class="hljs-keyword">const</span> url = <span class="hljs-keyword">new</span> URL(
    <span class="hljs-string">"https://app.azhasoft.com/connector/api/taxonomy/1"</span>
);

<span class="hljs-keyword">let</span> headers = {
    <span class="hljs-string">"Content-Type"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Accept"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Authorization"</span>: <span class="hljs-string">"Bearer {token}"</span>,
};

fetch(url, {
    method: <span class="hljs-string">"GET"</span>,
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; <span class="hljs-built_in">console</span>.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json hljs">{
    "<span class="hljs-attr">data</span>": [
        {
            "<span class="hljs-attr">id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">name</span>": <span class="hljs-string">"Men's"</span>,
            "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">short_code</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">parent_id</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">created_by</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">category_type</span>": <span class="hljs-string">"product"</span>,
            "<span class="hljs-attr">description</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">slug</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">woocommerce_cat_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">deleted_at</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2018-01-03 21:06:34"</span>,
            "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2018-01-03 21:06:34"</span>,
            "<span class="hljs-attr">sub_categories</span>": [
                {
                    "<span class="hljs-attr">id</span>": <span class="hljs-number">4</span>,
                    "<span class="hljs-attr">name</span>": <span class="hljs-string">"Jeans"</span>,
                    "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
                    "<span class="hljs-attr">short_code</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">parent_id</span>": <span class="hljs-number">1</span>,
                    "<span class="hljs-attr">created_by</span>": <span class="hljs-number">1</span>,
                    "<span class="hljs-attr">category_type</span>": <span class="hljs-string">"product"</span>,
                    "<span class="hljs-attr">description</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">slug</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">woocommerce_cat_id</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">deleted_at</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2018-01-03 21:07:34"</span>,
                    "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2018-01-03 21:07:34"</span>
                },
                {
                    "<span class="hljs-attr">id</span>": <span class="hljs-number">5</span>,
                    "<span class="hljs-attr">name</span>": <span class="hljs-string">"Shirts"</span>,
                    "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
                    "<span class="hljs-attr">short_code</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">parent_id</span>": <span class="hljs-number">1</span>,
                    "<span class="hljs-attr">created_by</span>": <span class="hljs-number">1</span>,
                    "<span class="hljs-attr">category_type</span>": <span class="hljs-string">"product"</span>,
                    "<span class="hljs-attr">description</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">slug</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">woocommerce_cat_id</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">deleted_at</span>": <span class="hljs-literal">null</span>,
                    "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2018-01-03 21:08:18"</span>,
                    "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2018-01-03 21:08:18"</span>
                }
            ]
        }
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET connector/api/taxonomy/{taxonomy}</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>taxonomy</code></td>
<td>required</td>
<td>comma separated ids of product categories</td>
</tr>
</tbody>
</table>
<!-- END_b928b0227f535bab611da00bc247f60c -->
<div name="types-of-service-management" data-unique="types-of-service-management"></div><h1 id="types-of-service-management">Types of service management</h1>
<!-- START_b7d8e3052b6a47b9bfe5f6ebd5d8fa61 -->
<div name="list-types-of-service" data-unique="list-types-of-service"></div><h2 id="list-types-of-service">List types of service</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre style="display: block;"><code class="language-bash hljs">curl -X GET \
    -G <span class="hljs-string">"https://app.azhasoft.com/connector/api/types-of-service"</span> \
    -H <span class="hljs-string">"Content-Type: application/json"</span> \
    -H <span class="hljs-string">"Accept: application/json"</span> \
    -H <span class="hljs-string">"Authorization: Bearer {token}"</span></code></pre>
<pre style="display: none;"><code class="language-javascript hljs"><span class="hljs-keyword">const</span> url = <span class="hljs-keyword">new</span> URL(
    <span class="hljs-string">"https://app.azhasoft.com/connector/api/types-of-service"</span>
);

<span class="hljs-keyword">let</span> headers = {
    <span class="hljs-string">"Content-Type"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Accept"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Authorization"</span>: <span class="hljs-string">"Bearer {token}"</span>,
};

fetch(url, {
    method: <span class="hljs-string">"GET"</span>,
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; <span class="hljs-built_in">console</span>.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json hljs">{
    "<span class="hljs-attr">data</span>": [
        {
            "<span class="hljs-attr">id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">name</span>": <span class="hljs-string">"Home Delivery"</span>,
            "<span class="hljs-attr">description</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">location_price_group</span>": {
                "<span class="hljs-attr">1</span>": <span class="hljs-string">"0"</span>
            },
            "<span class="hljs-attr">packing_charge</span>": <span class="hljs-string">"10.0000"</span>,
            "<span class="hljs-attr">packing_charge_type</span>": <span class="hljs-string">"fixed"</span>,
            "<span class="hljs-attr">enable_custom_fields</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2020-06-04 22:41:13"</span>,
            "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2020-06-04 22:41:13"</span>
        }
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET connector/api/types-of-service</code></p>
<!-- END_b7d8e3052b6a47b9bfe5f6ebd5d8fa61 -->
<!-- START_d7b9bf97c5de35536625b759853d0fe3 -->
<div name="get-the-specified-types-of-service" data-unique="get-the-specified-types-of-service"></div><h2 id="get-the-specified-types-of-service">Get the specified types of service</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre style="display: block;"><code class="language-bash hljs">curl -X GET \
    -G <span class="hljs-string">"https://app.azhasoft.com/connector/api/types-of-service/1"</span> \
    -H <span class="hljs-string">"Content-Type: application/json"</span> \
    -H <span class="hljs-string">"Accept: application/json"</span> \
    -H <span class="hljs-string">"Authorization: Bearer {token}"</span></code></pre>
<pre style="display: none;"><code class="language-javascript hljs"><span class="hljs-keyword">const</span> url = <span class="hljs-keyword">new</span> URL(
    <span class="hljs-string">"https://app.azhasoft.com/connector/api/types-of-service/1"</span>
);

<span class="hljs-keyword">let</span> headers = {
    <span class="hljs-string">"Content-Type"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Accept"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Authorization"</span>: <span class="hljs-string">"Bearer {token}"</span>,
};

fetch(url, {
    method: <span class="hljs-string">"GET"</span>,
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; <span class="hljs-built_in">console</span>.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json hljs">{
    "<span class="hljs-attr">data</span>": [
        {
            "<span class="hljs-attr">id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">name</span>": <span class="hljs-string">"Home Delivery"</span>,
            "<span class="hljs-attr">description</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">location_price_group</span>": {
                "<span class="hljs-attr">1</span>": <span class="hljs-string">"0"</span>
            },
            "<span class="hljs-attr">packing_charge</span>": <span class="hljs-string">"10.0000"</span>,
            "<span class="hljs-attr">packing_charge_type</span>": <span class="hljs-string">"fixed"</span>,
            "<span class="hljs-attr">enable_custom_fields</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2020-06-04 22:41:13"</span>,
            "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2020-06-04 22:41:13"</span>
        }
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET connector/api/types-of-service/{types_of_service}</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>types_of_service</code></td>
<td>required</td>
<td>comma separated ids of required types of services</td>
</tr>
</tbody>
</table>
<!-- END_d7b9bf97c5de35536625b759853d0fe3 -->
<div name="unit-management" data-unique="unit-management"></div><h1 id="unit-management">Unit management</h1>
<!-- START_67d5fa9f69cb75cbecbcab90aa615c1e -->
<div name="list-units" data-unique="list-units"></div><h2 id="list-units">List units</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre style="display: block;"><code class="language-bash hljs">curl -X GET \
    -G <span class="hljs-string">"https://app.azhasoft.com/connector/api/unit"</span> \
    -H <span class="hljs-string">"Content-Type: application/json"</span> \
    -H <span class="hljs-string">"Accept: application/json"</span> \
    -H <span class="hljs-string">"Authorization: Bearer {token}"</span></code></pre>
<pre style="display: none;"><code class="language-javascript hljs"><span class="hljs-keyword">const</span> url = <span class="hljs-keyword">new</span> URL(
    <span class="hljs-string">"https://app.azhasoft.com/connector/api/unit"</span>
);

<span class="hljs-keyword">let</span> headers = {
    <span class="hljs-string">"Content-Type"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Accept"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Authorization"</span>: <span class="hljs-string">"Bearer {token}"</span>,
};

fetch(url, {
    method: <span class="hljs-string">"GET"</span>,
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; <span class="hljs-built_in">console</span>.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json hljs">{
    "<span class="hljs-attr">data</span>": [
        {
            "<span class="hljs-attr">id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">actual_name</span>": <span class="hljs-string">"Pieces"</span>,
            "<span class="hljs-attr">short_name</span>": <span class="hljs-string">"Pc(s)"</span>,
            "<span class="hljs-attr">allow_decimal</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">base_unit_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">base_unit_multiplier</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">created_by</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">deleted_at</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2018-01-03 15:15:20"</span>,
            "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2018-01-03 15:15:20"</span>,
            "<span class="hljs-attr">base_unit</span>": <span class="hljs-literal">null</span>
        },
        {
            "<span class="hljs-attr">id</span>": <span class="hljs-number">2</span>,
            "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">actual_name</span>": <span class="hljs-string">"Packets"</span>,
            "<span class="hljs-attr">short_name</span>": <span class="hljs-string">"packets"</span>,
            "<span class="hljs-attr">allow_decimal</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">base_unit_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">base_unit_multiplier</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">created_by</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">deleted_at</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2018-01-06 01:07:01"</span>,
            "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2018-01-06 01:08:36"</span>,
            "<span class="hljs-attr">base_unit</span>": <span class="hljs-literal">null</span>
        },
        {
            "<span class="hljs-attr">id</span>": <span class="hljs-number">15</span>,
            "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">actual_name</span>": <span class="hljs-string">"Dozen"</span>,
            "<span class="hljs-attr">short_name</span>": <span class="hljs-string">"dz"</span>,
            "<span class="hljs-attr">allow_decimal</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">base_unit_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">base_unit_multiplier</span>": <span class="hljs-string">"12.0000"</span>,
            "<span class="hljs-attr">created_by</span>": <span class="hljs-number">9</span>,
            "<span class="hljs-attr">deleted_at</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2020-07-20 13:11:09"</span>,
            "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2020-07-20 13:11:09"</span>,
            "<span class="hljs-attr">base_unit</span>": {
                "<span class="hljs-attr">id</span>": <span class="hljs-number">1</span>,
                "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
                "<span class="hljs-attr">actual_name</span>": <span class="hljs-string">"Pieces"</span>,
                "<span class="hljs-attr">short_name</span>": <span class="hljs-string">"Pc(s)"</span>,
                "<span class="hljs-attr">allow_decimal</span>": <span class="hljs-number">0</span>,
                "<span class="hljs-attr">base_unit_id</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">base_unit_multiplier</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">created_by</span>": <span class="hljs-number">1</span>,
                "<span class="hljs-attr">deleted_at</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2018-01-03 15:15:20"</span>,
                "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2018-01-03 15:15:20"</span>
            }
        }
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET connector/api/unit</code></p>
<!-- END_67d5fa9f69cb75cbecbcab90aa615c1e -->
<!-- START_17b54fc5627b3e3dab9d30f80da21dc9 -->
<div name="get-the-specified-unit" data-unique="get-the-specified-unit"></div><h2 id="get-the-specified-unit">Get the specified unit</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre style="display: block;"><code class="language-bash hljs">curl -X GET \
    -G <span class="hljs-string">"https://app.azhasoft.com/connector/api/unit/1"</span> \
    -H <span class="hljs-string">"Content-Type: application/json"</span> \
    -H <span class="hljs-string">"Accept: application/json"</span> \
    -H <span class="hljs-string">"Authorization: Bearer {token}"</span></code></pre>
<pre style="display: none;"><code class="language-javascript hljs"><span class="hljs-keyword">const</span> url = <span class="hljs-keyword">new</span> URL(
    <span class="hljs-string">"https://app.azhasoft.com/connector/api/unit/1"</span>
);

<span class="hljs-keyword">let</span> headers = {
    <span class="hljs-string">"Content-Type"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Accept"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Authorization"</span>: <span class="hljs-string">"Bearer {token}"</span>,
};

fetch(url, {
    method: <span class="hljs-string">"GET"</span>,
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; <span class="hljs-built_in">console</span>.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json hljs">{
    "<span class="hljs-attr">data</span>": [
        {
            "<span class="hljs-attr">id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">actual_name</span>": <span class="hljs-string">"Pieces"</span>,
            "<span class="hljs-attr">short_name</span>": <span class="hljs-string">"Pc(s)"</span>,
            "<span class="hljs-attr">allow_decimal</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">base_unit_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">base_unit_multiplier</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">created_by</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">deleted_at</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2018-01-03 15:15:20"</span>,
            "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2018-01-03 15:15:20"</span>,
            "<span class="hljs-attr">base_unit</span>": <span class="hljs-literal">null</span>
        }
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET connector/api/unit/{unit}</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>unit</code></td>
<td>required</td>
<td>comma separated ids of the units</td>
</tr>
</tbody>
</table>
<!-- END_17b54fc5627b3e3dab9d30f80da21dc9 -->
<div name="user-management" data-unique="user-management"></div><h1 id="user-management">User management</h1>
<!-- START_9d201fa59006772510fc0285886d0b0f -->
<div name="get-the-loggedin-user-details" data-unique="get-the-loggedin-user-details"></div><h2 id="get-the-loggedin-user-details">Get the loggedin user details.</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre style="display: block;"><code class="language-bash hljs">curl -X GET \
    -G <span class="hljs-string">"https://app.azhasoft.com/connector/api/user/loggedin"</span> \
    -H <span class="hljs-string">"Content-Type: application/json"</span> \
    -H <span class="hljs-string">"Accept: application/json"</span> \
    -H <span class="hljs-string">"Authorization: Bearer {token}"</span></code></pre>
<pre style="display: none;"><code class="language-javascript hljs"><span class="hljs-keyword">const</span> url = <span class="hljs-keyword">new</span> URL(
    <span class="hljs-string">"https://app.azhasoft.com/connector/api/user/loggedin"</span>
);

<span class="hljs-keyword">let</span> headers = {
    <span class="hljs-string">"Content-Type"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Accept"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Authorization"</span>: <span class="hljs-string">"Bearer {token}"</span>,
};

fetch(url, {
    method: <span class="hljs-string">"GET"</span>,
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; <span class="hljs-built_in">console</span>.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json hljs">{
    "<span class="hljs-attr">data</span>": {
        "<span class="hljs-attr">id</span>": <span class="hljs-number">1</span>,
        "<span class="hljs-attr">user_type</span>": <span class="hljs-string">"user"</span>,
        "<span class="hljs-attr">surname</span>": <span class="hljs-string">"Mr"</span>,
        "<span class="hljs-attr">first_name</span>": <span class="hljs-string">"Admin"</span>,
        "<span class="hljs-attr">last_name</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">username</span>": <span class="hljs-string">"admin"</span>,
        "<span class="hljs-attr">email</span>": <span class="hljs-string">"admin@example.com"</span>,
        "<span class="hljs-attr">language</span>": <span class="hljs-string">"en"</span>,
        "<span class="hljs-attr">contact_no</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">address</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
        "<span class="hljs-attr">max_sales_discount_percent</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">allow_login</span>": <span class="hljs-number">1</span>,
        "<span class="hljs-attr">essentials_department_id</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">essentials_designation_id</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">status</span>": <span class="hljs-string">"active"</span>,
        "<span class="hljs-attr">crm_contact_id</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">is_cmmsn_agnt</span>": <span class="hljs-number">0</span>,
        "<span class="hljs-attr">cmmsn_percent</span>": <span class="hljs-string">"0.00"</span>,
        "<span class="hljs-attr">selected_contacts</span>": <span class="hljs-number">0</span>,
        "<span class="hljs-attr">dob</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">gender</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">marital_status</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">blood_group</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">contact_number</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">fb_link</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">twitter_link</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">social_media_1</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">social_media_2</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">permanent_address</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">current_address</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">guardian_name</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">custom_field_1</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">custom_field_2</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">custom_field_3</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">custom_field_4</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">bank_details</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">id_proof_name</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">id_proof_number</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">deleted_at</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2018-01-04 02:15:19"</span>,
        "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2018-01-04 02:15:19"</span>
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET connector/api/user/loggedin</code></p>
<!-- END_9d201fa59006772510fc0285886d0b0f -->
<!-- START_3b5f86fc519477d4b2c3b6b7104257c7 -->
<div name="list-users" data-unique="list-users"></div><h2 id="list-users">List users</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre style="display: block;"><code class="language-bash hljs">curl -X GET \
    -G <span class="hljs-string">"https://app.azhasoft.com/connector/api/user?service_staff=consequatur"</span> \
    -H <span class="hljs-string">"Content-Type: application/json"</span> \
    -H <span class="hljs-string">"Accept: application/json"</span> \
    -H <span class="hljs-string">"Authorization: Bearer {token}"</span></code></pre>
<pre style="display: none;"><code class="language-javascript hljs"><span class="hljs-keyword">const</span> url = <span class="hljs-keyword">new</span> URL(
    <span class="hljs-string">"https://app.azhasoft.com/connector/api/user"</span>
);

<span class="hljs-keyword">let</span> params = {
    <span class="hljs-string">"service_staff"</span>: <span class="hljs-string">"consequatur"</span>,
};
<span class="hljs-built_in">Object</span>.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

<span class="hljs-keyword">let</span> headers = {
    <span class="hljs-string">"Content-Type"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Accept"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Authorization"</span>: <span class="hljs-string">"Bearer {token}"</span>,
};

fetch(url, {
    method: <span class="hljs-string">"GET"</span>,
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; <span class="hljs-built_in">console</span>.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json hljs">{
    "<span class="hljs-attr">data</span>": [
        {
            "<span class="hljs-attr">id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">user_type</span>": <span class="hljs-string">"user"</span>,
            "<span class="hljs-attr">surname</span>": <span class="hljs-string">"Mr"</span>,
            "<span class="hljs-attr">first_name</span>": <span class="hljs-string">"Admin"</span>,
            "<span class="hljs-attr">last_name</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">username</span>": <span class="hljs-string">"admin"</span>,
            "<span class="hljs-attr">email</span>": <span class="hljs-string">"admin@example.com"</span>,
            "<span class="hljs-attr">language</span>": <span class="hljs-string">"en"</span>,
            "<span class="hljs-attr">contact_no</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">address</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">max_sales_discount_percent</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">allow_login</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">essentials_department_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">essentials_designation_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">status</span>": <span class="hljs-string">"active"</span>,
            "<span class="hljs-attr">crm_contact_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">is_cmmsn_agnt</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">cmmsn_percent</span>": <span class="hljs-string">"0.00"</span>,
            "<span class="hljs-attr">selected_contacts</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">dob</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">gender</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">marital_status</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">blood_group</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">contact_number</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">fb_link</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">twitter_link</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">social_media_1</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">social_media_2</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">permanent_address</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">current_address</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">guardian_name</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">custom_field_1</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">custom_field_2</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">custom_field_3</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">custom_field_4</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">bank_details</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">id_proof_name</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">id_proof_number</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">deleted_at</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2018-01-04 02:15:19"</span>,
            "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2018-01-04 02:15:19"</span>
        }
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET connector/api/user</code></p>
<h4>Query Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>service_staff</code></td>
<td>optional</td>
<td>boolean Filter service staffs from users list (0, 1)</td>
</tr>
</tbody>
</table>
<!-- END_3b5f86fc519477d4b2c3b6b7104257c7 -->
<!-- START_5182c01637c8f532fe8cddbeed5f3ca0 -->
<div name="get-the-specified-user" data-unique="get-the-specified-user"></div><h2 id="get-the-specified-user">Get the specified user</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre style="display: block;"><code class="language-bash hljs">curl -X GET \
    -G <span class="hljs-string">"https://app.azhasoft.com/connector/api/user/1"</span> \
    -H <span class="hljs-string">"Content-Type: application/json"</span> \
    -H <span class="hljs-string">"Accept: application/json"</span> \
    -H <span class="hljs-string">"Authorization: Bearer {token}"</span></code></pre>
<pre style="display: none;"><code class="language-javascript hljs"><span class="hljs-keyword">const</span> url = <span class="hljs-keyword">new</span> URL(
    <span class="hljs-string">"https://app.azhasoft.com/connector/api/user/1"</span>
);

<span class="hljs-keyword">let</span> headers = {
    <span class="hljs-string">"Content-Type"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Accept"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Authorization"</span>: <span class="hljs-string">"Bearer {token}"</span>,
};

fetch(url, {
    method: <span class="hljs-string">"GET"</span>,
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; <span class="hljs-built_in">console</span>.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json hljs">{
    "<span class="hljs-attr">data</span>": [
        {
            "<span class="hljs-attr">id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">user_type</span>": <span class="hljs-string">"user"</span>,
            "<span class="hljs-attr">surname</span>": <span class="hljs-string">"Mr"</span>,
            "<span class="hljs-attr">first_name</span>": <span class="hljs-string">"Admin"</span>,
            "<span class="hljs-attr">last_name</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">username</span>": <span class="hljs-string">"admin"</span>,
            "<span class="hljs-attr">email</span>": <span class="hljs-string">"admin@example.com"</span>,
            "<span class="hljs-attr">language</span>": <span class="hljs-string">"en"</span>,
            "<span class="hljs-attr">contact_no</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">address</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">max_sales_discount_percent</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">allow_login</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">essentials_department_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">essentials_designation_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">status</span>": <span class="hljs-string">"active"</span>,
            "<span class="hljs-attr">crm_contact_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">is_cmmsn_agnt</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">cmmsn_percent</span>": <span class="hljs-string">"0.00"</span>,
            "<span class="hljs-attr">selected_contacts</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">dob</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">gender</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">marital_status</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">blood_group</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">contact_number</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">fb_link</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">twitter_link</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">social_media_1</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">social_media_2</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">permanent_address</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">current_address</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">guardian_name</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">custom_field_1</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">custom_field_2</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">custom_field_3</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">custom_field_4</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">bank_details</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">id_proof_name</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">id_proof_number</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">deleted_at</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2018-01-04 02:15:19"</span>,
            "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2018-01-04 02:15:19"</span>
        }
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET connector/api/user/{user}</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>user</code></td>
<td>required</td>
<td>comma separated ids of the required users</td>
</tr>
</tbody>
</table>
<!-- END_5182c01637c8f532fe8cddbeed5f3ca0 -->
<!-- START_89e46657027975ac623db673ed8a4d00 -->
<div name="update-user-password" data-unique="update-user-password"></div><h2 id="update-user-password">Update user password.</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre style="display: block;"><code class="language-bash hljs">curl -X POST \
    <span class="hljs-string">"https://app.azhasoft.com/connector/api/update-password"</span> \
    -H <span class="hljs-string">"Content-Type: application/json"</span> \
    -H <span class="hljs-string">"Accept: application/json"</span> \
    -H <span class="hljs-string">"Authorization: Bearer {token}"</span> \
    <span class="hljs-_">-d</span> <span class="hljs-string">'{"current_password":"et","new_password":"consequatur"}'</span>
</code></pre>
<pre style="display: none;"><code class="language-javascript hljs"><span class="hljs-keyword">const</span> url = <span class="hljs-keyword">new</span> URL(
    <span class="hljs-string">"https://app.azhasoft.com/connector/api/update-password"</span>
);

<span class="hljs-keyword">let</span> headers = {
    <span class="hljs-string">"Content-Type"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Accept"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Authorization"</span>: <span class="hljs-string">"Bearer {token}"</span>,
};

<span class="hljs-keyword">let</span> body = {
    <span class="hljs-string">"current_password"</span>: <span class="hljs-string">"et"</span>,
    <span class="hljs-string">"new_password"</span>: <span class="hljs-string">"consequatur"</span>
}

fetch(url, {
    method: <span class="hljs-string">"POST"</span>,
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; <span class="hljs-built_in">console</span>.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json hljs">{
    "<span class="hljs-attr">success</span>": <span class="hljs-number">1</span>,
    "<span class="hljs-attr">msg</span>": <span class="hljs-string">"Password updated successfully"</span>
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST connector/api/update-password</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>current_password</code></td>
<td>string</td>
<td>required</td>
<td>Current password of the user</td>
</tr>
<tr>
<td><code>new_password</code></td>
<td>string</td>
<td>required</td>
<td>New password of the user</td>
</tr>
</tbody>
</table>
<!-- END_89e46657027975ac623db673ed8a4d00 -->
<div name="general" data-unique="general"></div><h1 id="general">general</h1>
<!-- START_4291b84958f2fa16d58446f4a4412eae -->
<div name="list-payment-accounts" data-unique="list-payment-accounts"></div><h2 id="list-payment-accounts">List payment accounts</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre style="display: block;"><code class="language-bash hljs">curl -X GET \
    -G <span class="hljs-string">"https://app.azhasoft.com/connector/api/payment-accounts"</span> \
    -H <span class="hljs-string">"Content-Type: application/json"</span> \
    -H <span class="hljs-string">"Accept: application/json"</span> \
    -H <span class="hljs-string">"Authorization: Bearer {token}"</span></code></pre>
<pre style="display: none;"><code class="language-javascript hljs"><span class="hljs-keyword">const</span> url = <span class="hljs-keyword">new</span> URL(
    <span class="hljs-string">"https://app.azhasoft.com/connector/api/payment-accounts"</span>
);

<span class="hljs-keyword">let</span> headers = {
    <span class="hljs-string">"Content-Type"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Accept"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Authorization"</span>: <span class="hljs-string">"Bearer {token}"</span>,
};

fetch(url, {
    method: <span class="hljs-string">"GET"</span>,
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; <span class="hljs-built_in">console</span>.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json hljs">{
    "<span class="hljs-attr">data</span>": [
        {
            "<span class="hljs-attr">id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">name</span>": <span class="hljs-string">"Test Account"</span>,
            "<span class="hljs-attr">account_number</span>": <span class="hljs-string">"8746888847455"</span>,
            "<span class="hljs-attr">account_type_id</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">note</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">created_by</span>": <span class="hljs-number">9</span>,
            "<span class="hljs-attr">is_closed</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">deleted_at</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2020-06-04 21:34:21"</span>,
            "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2020-06-04 21:34:21"</span>
        }
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET connector/api/payment-accounts</code></p>
<!-- END_4291b84958f2fa16d58446f4a4412eae -->
<!-- START_ad1145912d113a821c97dbb9e337b960 -->
<div name="list-payment-methods" data-unique="list-payment-methods"></div><h2 id="list-payment-methods">List payment methods</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre style="display: block;"><code class="language-bash hljs">curl -X GET \
    -G <span class="hljs-string">"https://app.azhasoft.com/connector/api/payment-methods"</span> \
    -H <span class="hljs-string">"Content-Type: application/json"</span> \
    -H <span class="hljs-string">"Accept: application/json"</span> \
    -H <span class="hljs-string">"Authorization: Bearer {token}"</span></code></pre>
<pre style="display: none;"><code class="language-javascript hljs"><span class="hljs-keyword">const</span> url = <span class="hljs-keyword">new</span> URL(
    <span class="hljs-string">"https://app.azhasoft.com/connector/api/payment-methods"</span>
);

<span class="hljs-keyword">let</span> headers = {
    <span class="hljs-string">"Content-Type"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Accept"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Authorization"</span>: <span class="hljs-string">"Bearer {token}"</span>,
};

fetch(url, {
    method: <span class="hljs-string">"GET"</span>,
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; <span class="hljs-built_in">console</span>.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json hljs">{
    "<span class="hljs-attr">cash</span>": <span class="hljs-string">"Cash"</span>,
    "<span class="hljs-attr">card</span>": <span class="hljs-string">"Card"</span>,
    "<span class="hljs-attr">cheque</span>": <span class="hljs-string">"Cheque"</span>,
    "<span class="hljs-attr">bank_transfer</span>": <span class="hljs-string">"Bank Transfer"</span>,
    "<span class="hljs-attr">other</span>": <span class="hljs-string">"Other"</span>,
    "<span class="hljs-attr">custom_pay_1</span>": <span class="hljs-string">"Custom Payment 1"</span>,
    "<span class="hljs-attr">custom_pay_2</span>": <span class="hljs-string">"Custom Payment 2"</span>,
    "<span class="hljs-attr">custom_pay_3</span>": <span class="hljs-string">"Custom Payment 3"</span>
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET connector/api/payment-methods</code></p>
<!-- END_ad1145912d113a821c97dbb9e337b960 -->
<!-- START_c20326b50073732875acc9a84f706194 -->
<div name="get-business-details" data-unique="get-business-details"></div><h2 id="get-business-details">Get business details</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre style="display: block;"><code class="language-bash hljs">curl -X GET \
    -G <span class="hljs-string">"https://app.azhasoft.com/connector/api/business-details"</span> \
    -H <span class="hljs-string">"Content-Type: application/json"</span> \
    -H <span class="hljs-string">"Accept: application/json"</span> \
    -H <span class="hljs-string">"Authorization: Bearer {token}"</span></code></pre>
<pre style="display: none;"><code class="language-javascript hljs"><span class="hljs-keyword">const</span> url = <span class="hljs-keyword">new</span> URL(
    <span class="hljs-string">"https://app.azhasoft.com/connector/api/business-details"</span>
);

<span class="hljs-keyword">let</span> headers = {
    <span class="hljs-string">"Content-Type"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Accept"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Authorization"</span>: <span class="hljs-string">"Bearer {token}"</span>,
};

fetch(url, {
    method: <span class="hljs-string">"GET"</span>,
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; <span class="hljs-built_in">console</span>.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json hljs">{
    "<span class="hljs-attr">data</span>": {
        "<span class="hljs-attr">id</span>": <span class="hljs-number">1</span>,
        "<span class="hljs-attr">name</span>": <span class="hljs-string">"Awesome Shop"</span>,
        "<span class="hljs-attr">currency_id</span>": <span class="hljs-number">2</span>,
        "<span class="hljs-attr">start_date</span>": <span class="hljs-string">"2018-01-01"</span>,
        "<span class="hljs-attr">tax_number_1</span>": <span class="hljs-string">"3412569900"</span>,
        "<span class="hljs-attr">tax_label_1</span>": <span class="hljs-string">"GSTIN"</span>,
        "<span class="hljs-attr">tax_number_2</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">tax_label_2</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">default_sales_tax</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">default_profit_percent</span>": <span class="hljs-number">25</span>,
        "<span class="hljs-attr">owner_id</span>": <span class="hljs-number">1</span>,
        "<span class="hljs-attr">time_zone</span>": <span class="hljs-string">"America\/Phoenix"</span>,
        "<span class="hljs-attr">fy_start_month</span>": <span class="hljs-number">1</span>,
        "<span class="hljs-attr">accounting_method</span>": <span class="hljs-string">"fifo"</span>,
        "<span class="hljs-attr">default_sales_discount</span>": <span class="hljs-string">"10.00"</span>,
        "<span class="hljs-attr">sell_price_tax</span>": <span class="hljs-string">"includes"</span>,
        "<span class="hljs-attr">logo</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">sku_prefix</span>": <span class="hljs-string">"AS"</span>,
        "<span class="hljs-attr">enable_product_expiry</span>": <span class="hljs-number">0</span>,
        "<span class="hljs-attr">expiry_type</span>": <span class="hljs-string">"add_expiry"</span>,
        "<span class="hljs-attr">on_product_expiry</span>": <span class="hljs-string">"keep_selling"</span>,
        "<span class="hljs-attr">stop_selling_before</span>": <span class="hljs-number">0</span>,
        "<span class="hljs-attr">enable_tooltip</span>": <span class="hljs-number">1</span>,
        "<span class="hljs-attr">purchase_in_diff_currency</span>": <span class="hljs-number">0</span>,
        "<span class="hljs-attr">purchase_currency_id</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">p_exchange_rate</span>": <span class="hljs-string">"1.000"</span>,
        "<span class="hljs-attr">transaction_edit_days</span>": <span class="hljs-number">30</span>,
        "<span class="hljs-attr">stock_expiry_alert_days</span>": <span class="hljs-number">30</span>,
        "<span class="hljs-attr">keyboard_shortcuts</span>": {
            "<span class="hljs-attr">pos</span>": {
                "<span class="hljs-attr">express_checkout</span>": <span class="hljs-string">"shift+e"</span>,
                "<span class="hljs-attr">pay_n_ckeckout</span>": <span class="hljs-string">"shift+p"</span>,
                "<span class="hljs-attr">draft</span>": <span class="hljs-string">"shift+d"</span>,
                "<span class="hljs-attr">cancel</span>": <span class="hljs-string">"shift+c"</span>,
                "<span class="hljs-attr">recent_product_quantity</span>": <span class="hljs-string">"f2"</span>,
                "<span class="hljs-attr">weighing_scale</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">edit_discount</span>": <span class="hljs-string">"shift+i"</span>,
                "<span class="hljs-attr">edit_order_tax</span>": <span class="hljs-string">"shift+t"</span>,
                "<span class="hljs-attr">add_payment_row</span>": <span class="hljs-string">"shift+r"</span>,
                "<span class="hljs-attr">finalize_payment</span>": <span class="hljs-string">"shift+f"</span>,
                "<span class="hljs-attr">add_new_product</span>": <span class="hljs-string">"f4"</span>
            }
        },
        "<span class="hljs-attr">pos_settings</span>": {
            "<span class="hljs-attr">amount_rounding_method</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">disable_pay_checkout</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">disable_draft</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">disable_express_checkout</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">hide_product_suggestion</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">hide_recent_trans</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">disable_discount</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">disable_order_tax</span>": <span class="hljs-number">0</span>,
            "<span class="hljs-attr">is_pos_subtotal_editable</span>": <span class="hljs-number">0</span>
        },
        "<span class="hljs-attr">weighing_scale_setting</span>": {
            "<span class="hljs-attr">label_prefix</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">product_sku_length</span>": <span class="hljs-string">"4"</span>,
            "<span class="hljs-attr">qty_length</span>": <span class="hljs-string">"3"</span>,
            "<span class="hljs-attr">qty_length_decimal</span>": <span class="hljs-string">"2"</span>
        },
        "<span class="hljs-attr">manufacturing_settings</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">essentials_settings</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">ecom_settings</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">woocommerce_wh_oc_secret</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">woocommerce_wh_ou_secret</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">woocommerce_wh_od_secret</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">woocommerce_wh_or_secret</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">enable_brand</span>": <span class="hljs-number">1</span>,
        "<span class="hljs-attr">enable_category</span>": <span class="hljs-number">1</span>,
        "<span class="hljs-attr">enable_sub_category</span>": <span class="hljs-number">1</span>,
        "<span class="hljs-attr">enable_price_tax</span>": <span class="hljs-number">1</span>,
        "<span class="hljs-attr">enable_purchase_status</span>": <span class="hljs-number">1</span>,
        "<span class="hljs-attr">enable_lot_number</span>": <span class="hljs-number">0</span>,
        "<span class="hljs-attr">default_unit</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">enable_sub_units</span>": <span class="hljs-number">0</span>,
        "<span class="hljs-attr">enable_racks</span>": <span class="hljs-number">0</span>,
        "<span class="hljs-attr">enable_row</span>": <span class="hljs-number">0</span>,
        "<span class="hljs-attr">enable_position</span>": <span class="hljs-number">0</span>,
        "<span class="hljs-attr">enable_editing_product_from_purchase</span>": <span class="hljs-number">1</span>,
        "<span class="hljs-attr">sales_cmsn_agnt</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">item_addition_method</span>": <span class="hljs-number">1</span>,
        "<span class="hljs-attr">enable_inline_tax</span>": <span class="hljs-number">1</span>,
        "<span class="hljs-attr">currency_symbol_placement</span>": <span class="hljs-string">"before"</span>,
        "<span class="hljs-attr">enabled_modules</span>": [
            <span class="hljs-string">"purchases"</span>,
            <span class="hljs-string">"add_sale"</span>,
            <span class="hljs-string">"pos_sale"</span>,
            <span class="hljs-string">"stock_transfers"</span>,
            <span class="hljs-string">"stock_adjustment"</span>,
            <span class="hljs-string">"expenses"</span>,
            <span class="hljs-string">"account"</span>,
            <span class="hljs-string">"tables"</span>,
            <span class="hljs-string">"modifiers"</span>,
            <span class="hljs-string">"service_staff"</span>,
            <span class="hljs-string">"booking"</span>,
            <span class="hljs-string">"kitchen"</span>,
            <span class="hljs-string">"subscription"</span>,
            <span class="hljs-string">"types_of_service"</span>
        ],
        "<span class="hljs-attr">date_format</span>": <span class="hljs-string">"m\/d\/Y"</span>,
        "<span class="hljs-attr">time_format</span>": <span class="hljs-string">"24"</span>,
        "<span class="hljs-attr">ref_no_prefixes</span>": {
            "<span class="hljs-attr">purchase</span>": <span class="hljs-string">"PO"</span>,
            "<span class="hljs-attr">purchase_return</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">stock_transfer</span>": <span class="hljs-string">"ST"</span>,
            "<span class="hljs-attr">stock_adjustment</span>": <span class="hljs-string">"SA"</span>,
            "<span class="hljs-attr">sell_return</span>": <span class="hljs-string">"CN"</span>,
            "<span class="hljs-attr">expense</span>": <span class="hljs-string">"EP"</span>,
            "<span class="hljs-attr">contacts</span>": <span class="hljs-string">"CO"</span>,
            "<span class="hljs-attr">purchase_payment</span>": <span class="hljs-string">"PP"</span>,
            "<span class="hljs-attr">sell_payment</span>": <span class="hljs-string">"SP"</span>,
            "<span class="hljs-attr">expense_payment</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">business_location</span>": <span class="hljs-string">"BL"</span>,
            "<span class="hljs-attr">username</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">subscription</span>": <span class="hljs-literal">null</span>
        },
        "<span class="hljs-attr">theme_color</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">created_by</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">enable_rp</span>": <span class="hljs-number">0</span>,
        "<span class="hljs-attr">rp_name</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">amount_for_unit_rp</span>": <span class="hljs-string">"1.0000"</span>,
        "<span class="hljs-attr">min_order_total_for_rp</span>": <span class="hljs-string">"1.0000"</span>,
        "<span class="hljs-attr">max_rp_per_order</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">redeem_amount_per_unit_rp</span>": <span class="hljs-string">"1.0000"</span>,
        "<span class="hljs-attr">min_order_total_for_redeem</span>": <span class="hljs-string">"1.0000"</span>,
        "<span class="hljs-attr">min_redeem_point</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">max_redeem_point</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">rp_expiry_period</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">rp_expiry_type</span>": <span class="hljs-string">"year"</span>,
        "<span class="hljs-attr">repair_settings</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">email_settings</span>": {
            "<span class="hljs-attr">mail_driver</span>": <span class="hljs-string">"smtp"</span>,
            "<span class="hljs-attr">mail_host</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">mail_port</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">mail_username</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">mail_password</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">mail_encryption</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">mail_from_address</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">mail_from_name</span>": <span class="hljs-literal">null</span>
        },
        "<span class="hljs-attr">sms_settings</span>": {
            "<span class="hljs-attr">url</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">send_to_param_name</span>": <span class="hljs-string">"to"</span>,
            "<span class="hljs-attr">msg_param_name</span>": <span class="hljs-string">"text"</span>,
            "<span class="hljs-attr">request_method</span>": <span class="hljs-string">"post"</span>,
            "<span class="hljs-attr">param_1</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">param_val_1</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">param_2</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">param_val_2</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">param_3</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">param_val_3</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">param_4</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">param_val_4</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">param_5</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">param_val_5</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">param_6</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">param_val_6</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">param_7</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">param_val_7</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">param_8</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">param_val_8</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">param_9</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">param_val_9</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">param_10</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">param_val_10</span>": <span class="hljs-literal">null</span>
        },
        "<span class="hljs-attr">custom_labels</span>": {
            "<span class="hljs-attr">payments</span>": {
                "<span class="hljs-attr">custom_pay_1</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">custom_pay_2</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">custom_pay_3</span>": <span class="hljs-literal">null</span>
            },
            "<span class="hljs-attr">contact</span>": {
                "<span class="hljs-attr">custom_field_1</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">custom_field_2</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">custom_field_3</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">custom_field_4</span>": <span class="hljs-literal">null</span>
            },
            "<span class="hljs-attr">product</span>": {
                "<span class="hljs-attr">custom_field_1</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">custom_field_2</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">custom_field_3</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">custom_field_4</span>": <span class="hljs-literal">null</span>
            },
            "<span class="hljs-attr">location</span>": {
                "<span class="hljs-attr">custom_field_1</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">custom_field_2</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">custom_field_3</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">custom_field_4</span>": <span class="hljs-literal">null</span>
            },
            "<span class="hljs-attr">user</span>": {
                "<span class="hljs-attr">custom_field_1</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">custom_field_2</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">custom_field_3</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">custom_field_4</span>": <span class="hljs-literal">null</span>
            },
            "<span class="hljs-attr">purchase</span>": {
                "<span class="hljs-attr">custom_field_1</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">custom_field_2</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">custom_field_3</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">custom_field_4</span>": <span class="hljs-literal">null</span>
            },
            "<span class="hljs-attr">sell</span>": {
                "<span class="hljs-attr">custom_field_1</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">custom_field_2</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">custom_field_3</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">custom_field_4</span>": <span class="hljs-literal">null</span>
            },
            "<span class="hljs-attr">types_of_service</span>": {
                "<span class="hljs-attr">custom_field_1</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">custom_field_2</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">custom_field_3</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">custom_field_4</span>": <span class="hljs-literal">null</span>
            }
        },
        "<span class="hljs-attr">common_settings</span>": {
            "<span class="hljs-attr">default_datatable_page_entries</span>": <span class="hljs-string">"25"</span>
        },
        "<span class="hljs-attr">is_active</span>": <span class="hljs-number">1</span>,
        "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2018-01-04 02:15:19"</span>,
        "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2020-06-04 22:33:01"</span>,
        "<span class="hljs-attr">locations</span>": [
            {
                "<span class="hljs-attr">id</span>": <span class="hljs-number">1</span>,
                "<span class="hljs-attr">business_id</span>": <span class="hljs-number">1</span>,
                "<span class="hljs-attr">location_id</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">name</span>": <span class="hljs-string">"Awesome Shop"</span>,
                "<span class="hljs-attr">landmark</span>": <span class="hljs-string">"Linking Street"</span>,
                "<span class="hljs-attr">country</span>": <span class="hljs-string">"USA"</span>,
                "<span class="hljs-attr">state</span>": <span class="hljs-string">"Arizona"</span>,
                "<span class="hljs-attr">city</span>": <span class="hljs-string">"Phoenix"</span>,
                "<span class="hljs-attr">zip_code</span>": <span class="hljs-string">"85001"</span>,
                "<span class="hljs-attr">invoice_scheme_id</span>": <span class="hljs-number">1</span>,
                "<span class="hljs-attr">invoice_layout_id</span>": <span class="hljs-number">1</span>,
                "<span class="hljs-attr">selling_price_group_id</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">print_receipt_on_invoice</span>": <span class="hljs-number">1</span>,
                "<span class="hljs-attr">receipt_printer_type</span>": <span class="hljs-string">"browser"</span>,
                "<span class="hljs-attr">printer_id</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">mobile</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">alternate_number</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">email</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">website</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">featured_products</span>": [
                    <span class="hljs-string">"5"</span>,
                    <span class="hljs-string">"71"</span>
                ],
                "<span class="hljs-attr">is_active</span>": <span class="hljs-number">1</span>,
                "<span class="hljs-attr">default_payment_accounts</span>": {
                    "<span class="hljs-attr">cash</span>": {
                        "<span class="hljs-attr">is_enabled</span>": <span class="hljs-string">"1"</span>,
                        "<span class="hljs-attr">account</span>": <span class="hljs-literal">null</span>
                    },
                    "<span class="hljs-attr">card</span>": {
                        "<span class="hljs-attr">is_enabled</span>": <span class="hljs-string">"1"</span>,
                        "<span class="hljs-attr">account</span>": <span class="hljs-literal">null</span>
                    },
                    "<span class="hljs-attr">cheque</span>": {
                        "<span class="hljs-attr">is_enabled</span>": <span class="hljs-string">"1"</span>,
                        "<span class="hljs-attr">account</span>": <span class="hljs-literal">null</span>
                    },
                    "<span class="hljs-attr">bank_transfer</span>": {
                        "<span class="hljs-attr">is_enabled</span>": <span class="hljs-string">"1"</span>,
                        "<span class="hljs-attr">account</span>": <span class="hljs-literal">null</span>
                    },
                    "<span class="hljs-attr">other</span>": {
                        "<span class="hljs-attr">is_enabled</span>": <span class="hljs-string">"1"</span>,
                        "<span class="hljs-attr">account</span>": <span class="hljs-literal">null</span>
                    },
                    "<span class="hljs-attr">custom_pay_1</span>": {
                        "<span class="hljs-attr">is_enabled</span>": <span class="hljs-string">"1"</span>,
                        "<span class="hljs-attr">account</span>": <span class="hljs-literal">null</span>
                    },
                    "<span class="hljs-attr">custom_pay_2</span>": {
                        "<span class="hljs-attr">is_enabled</span>": <span class="hljs-string">"1"</span>,
                        "<span class="hljs-attr">account</span>": <span class="hljs-literal">null</span>
                    },
                    "<span class="hljs-attr">custom_pay_3</span>": {
                        "<span class="hljs-attr">is_enabled</span>": <span class="hljs-string">"1"</span>,
                        "<span class="hljs-attr">account</span>": <span class="hljs-literal">null</span>
                    }
                },
                "<span class="hljs-attr">custom_field1</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">custom_field2</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">custom_field3</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">custom_field4</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">deleted_at</span>": <span class="hljs-literal">null</span>,
                "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"2018-01-04 02:15:20"</span>,
                "<span class="hljs-attr">updated_at</span>": <span class="hljs-string">"2020-06-05 00:56:54"</span>
            }
        ],
        "<span class="hljs-attr">currency</span>": {
            "<span class="hljs-attr">id</span>": <span class="hljs-number">2</span>,
            "<span class="hljs-attr">country</span>": <span class="hljs-string">"America"</span>,
            "<span class="hljs-attr">currency</span>": <span class="hljs-string">"Dollars"</span>,
            "<span class="hljs-attr">code</span>": <span class="hljs-string">"USD"</span>,
            "<span class="hljs-attr">symbol</span>": <span class="hljs-string">"$"</span>,
            "<span class="hljs-attr">thousand_separator</span>": <span class="hljs-string">","</span>,
            "<span class="hljs-attr">decimal_separator</span>": <span class="hljs-string">"."</span>,
            "<span class="hljs-attr">created_at</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">updated_at</span>": <span class="hljs-literal">null</span>
        },
        "<span class="hljs-attr">printers</span>": []
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET connector/api/business-details</code></p>
<!-- END_c20326b50073732875acc9a84f706194 -->
<!-- START_10f2d454f50aa840a3699d7f1aca1848 -->
<div name="get-profit-and-loss-report" data-unique="get-profit-and-loss-report"></div><h2 id="get-profit-and-loss-report">Get profit and loss report</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre style="display: block;"><code class="language-bash hljs">curl -X GET \
    -G <span class="hljs-string">"https://app.azhasoft.com/connector/api/profit-loss-report?location_id=ipsa&amp;start_date=2018-06-25&amp;end_date=2018-06-25&amp;user_id=eos"</span> \
    -H <span class="hljs-string">"Content-Type: application/json"</span> \
    -H <span class="hljs-string">"Accept: application/json"</span> \
    -H <span class="hljs-string">"Authorization: Bearer {token}"</span></code></pre>
<pre style="display: none;"><code class="language-javascript hljs"><span class="hljs-keyword">const</span> url = <span class="hljs-keyword">new</span> URL(
    <span class="hljs-string">"https://app.azhasoft.com/connector/api/profit-loss-report"</span>
);

<span class="hljs-keyword">let</span> params = {
    <span class="hljs-string">"location_id"</span>: <span class="hljs-string">"ipsa"</span>,
    <span class="hljs-string">"start_date"</span>: <span class="hljs-string">"2018-06-25"</span>,
    <span class="hljs-string">"end_date"</span>: <span class="hljs-string">"2018-06-25"</span>,
    <span class="hljs-string">"user_id"</span>: <span class="hljs-string">"eos"</span>,
};
<span class="hljs-built_in">Object</span>.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

<span class="hljs-keyword">let</span> headers = {
    <span class="hljs-string">"Content-Type"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Accept"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Authorization"</span>: <span class="hljs-string">"Bearer {token}"</span>,
};

fetch(url, {
    method: <span class="hljs-string">"GET"</span>,
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; <span class="hljs-built_in">console</span>.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json hljs">{
    "<span class="hljs-attr">data</span>": {
        "<span class="hljs-attr">total_purchase_shipping_charge</span>": <span class="hljs-number">0</span>,
        "<span class="hljs-attr">total_sell_shipping_charge</span>": <span class="hljs-number">0</span>,
        "<span class="hljs-attr">total_transfer_shipping_charges</span>": <span class="hljs-string">"0.0000"</span>,
        "<span class="hljs-attr">opening_stock</span>": <span class="hljs-number">0</span>,
        "<span class="hljs-attr">closing_stock</span>": <span class="hljs-string">"386859.00000000"</span>,
        "<span class="hljs-attr">total_purchase</span>": <span class="hljs-number">386936</span>,
        "<span class="hljs-attr">total_purchase_discount</span>": <span class="hljs-string">"0.000000000000"</span>,
        "<span class="hljs-attr">total_purchase_return</span>": <span class="hljs-string">"0.0000"</span>,
        "<span class="hljs-attr">total_sell</span>": <span class="hljs-number">9764.5</span>,
        "<span class="hljs-attr">total_sell_discount</span>": <span class="hljs-string">"11.550000000000"</span>,
        "<span class="hljs-attr">total_sell_return</span>": <span class="hljs-string">"0.0000"</span>,
        "<span class="hljs-attr">total_sell_round_off</span>": <span class="hljs-string">"0.0000"</span>,
        "<span class="hljs-attr">total_expense</span>": <span class="hljs-string">"0.0000"</span>,
        "<span class="hljs-attr">total_adjustment</span>": <span class="hljs-string">"0.0000"</span>,
        "<span class="hljs-attr">total_recovered</span>": <span class="hljs-string">"0.0000"</span>,
        "<span class="hljs-attr">total_reward_amount</span>": <span class="hljs-string">"0.0000"</span>,
        "<span class="hljs-attr">left_side_module_data</span>": [
            {
                "<span class="hljs-attr">value</span>": <span class="hljs-string">"0.0000"</span>,
                "<span class="hljs-attr">label</span>": <span class="hljs-string">"Total Payroll"</span>,
                "<span class="hljs-attr">add_to_net_profit</span>": <span class="hljs-literal">true</span>
            },
            {
                "<span class="hljs-attr">value</span>": <span class="hljs-number">0</span>,
                "<span class="hljs-attr">label</span>": <span class="hljs-string">"Total Production Cost"</span>,
                "<span class="hljs-attr">add_to_net_profit</span>": <span class="hljs-literal">true</span>
            }
        ],
        "<span class="hljs-attr">right_side_module_data</span>": [],
        "<span class="hljs-attr">net_profit</span>": <span class="hljs-number">9675.95</span>,
        "<span class="hljs-attr">gross_profit</span>": <span class="hljs-number">-11.55</span>,
        "<span class="hljs-attr">total_sell_by_subtype</span>": []
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET connector/api/profit-loss-report</code></p>
<h4>Query Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>location_id</code></td>
<td>optional</td>
<td>optional id of the location</td>
</tr>
<tr>
<td><code>start_date</code></td>
<td>optional</td>
<td>optional format:Y-m-d</td>
</tr>
<tr>
<td><code>end_date</code></td>
<td>optional</td>
<td>optional format:Y-m-d</td>
</tr>
<tr>
<td><code>user_id</code></td>
<td>optional</td>
<td>optional id of the user</td>
</tr>
</tbody>
</table>
<!-- END_10f2d454f50aa840a3699d7f1aca1848 -->
<!-- START_3735fc8265b24a44289e78c671b7e198 -->
<div name="get-product-current-stock" data-unique="get-product-current-stock"></div><h2 id="get-product-current-stock">Get product current stock</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre style="display: block;"><code class="language-bash hljs">curl -X GET \
    -G <span class="hljs-string">"https://app.azhasoft.com/connector/api/product-stock-report"</span> \
    -H <span class="hljs-string">"Content-Type: application/json"</span> \
    -H <span class="hljs-string">"Accept: application/json"</span> \
    -H <span class="hljs-string">"Authorization: Bearer {token}"</span></code></pre>
<pre style="display: none;"><code class="language-javascript hljs"><span class="hljs-keyword">const</span> url = <span class="hljs-keyword">new</span> URL(
    <span class="hljs-string">"https://app.azhasoft.com/connector/api/product-stock-report"</span>
);

<span class="hljs-keyword">let</span> headers = {
    <span class="hljs-string">"Content-Type"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Accept"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Authorization"</span>: <span class="hljs-string">"Bearer {token}"</span>,
};

fetch(url, {
    method: <span class="hljs-string">"GET"</span>,
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; <span class="hljs-built_in">console</span>.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json hljs">{
    "<span class="hljs-attr">data</span>": [
        {
            "<span class="hljs-attr">total_sold</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">total_transfered</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">total_adjusted</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">stock_price</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">stock</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">sku</span>": <span class="hljs-string">"AS0001"</span>,
            "<span class="hljs-attr">product</span>": <span class="hljs-string">"Men's Reverse Fleece Crew"</span>,
            "<span class="hljs-attr">type</span>": <span class="hljs-string">"single"</span>,
            "<span class="hljs-attr">product_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">unit</span>": <span class="hljs-string">"Pc(s)"</span>,
            "<span class="hljs-attr">enable_stock</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">unit_price</span>": <span class="hljs-string">"143.0000"</span>,
            "<span class="hljs-attr">product_variation</span>": <span class="hljs-string">"DUMMY"</span>,
            "<span class="hljs-attr">variation_name</span>": <span class="hljs-string">"DUMMY"</span>,
            "<span class="hljs-attr">location_name</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">location_id</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">variation_id</span>": <span class="hljs-number">1</span>
        },
        {
            "<span class="hljs-attr">total_sold</span>": <span class="hljs-string">"50.0000"</span>,
            "<span class="hljs-attr">total_transfered</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">total_adjusted</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">stock_price</span>": <span class="hljs-string">"3850.00000000"</span>,
            "<span class="hljs-attr">stock</span>": <span class="hljs-string">"50.0000"</span>,
            "<span class="hljs-attr">sku</span>": <span class="hljs-string">"AS0002-1"</span>,
            "<span class="hljs-attr">product</span>": <span class="hljs-string">"Levis Men's Slimmy Fit Jeans"</span>,
            "<span class="hljs-attr">type</span>": <span class="hljs-string">"variable"</span>,
            "<span class="hljs-attr">product_id</span>": <span class="hljs-number">2</span>,
            "<span class="hljs-attr">unit</span>": <span class="hljs-string">"Pc(s)"</span>,
            "<span class="hljs-attr">enable_stock</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">unit_price</span>": <span class="hljs-string">"77.0000"</span>,
            "<span class="hljs-attr">product_variation</span>": <span class="hljs-string">"Waist Size"</span>,
            "<span class="hljs-attr">variation_name</span>": <span class="hljs-string">"28"</span>,
            "<span class="hljs-attr">location_name</span>": <span class="hljs-string">"Awesome Shop"</span>,
            "<span class="hljs-attr">location_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">variation_id</span>": <span class="hljs-number">2</span>
        },
        {
            "<span class="hljs-attr">total_sold</span>": <span class="hljs-string">"60.0000"</span>,
            "<span class="hljs-attr">total_transfered</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">total_adjusted</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">stock_price</span>": <span class="hljs-string">"6930.00000000"</span>,
            "<span class="hljs-attr">stock</span>": <span class="hljs-string">"90.0000"</span>,
            "<span class="hljs-attr">sku</span>": <span class="hljs-string">"AS0002-2"</span>,
            "<span class="hljs-attr">product</span>": <span class="hljs-string">"Levis Men's Slimmy Fit Jeans"</span>,
            "<span class="hljs-attr">type</span>": <span class="hljs-string">"variable"</span>,
            "<span class="hljs-attr">product_id</span>": <span class="hljs-number">2</span>,
            "<span class="hljs-attr">unit</span>": <span class="hljs-string">"Pc(s)"</span>,
            "<span class="hljs-attr">enable_stock</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">unit_price</span>": <span class="hljs-string">"77.0000"</span>,
            "<span class="hljs-attr">product_variation</span>": <span class="hljs-string">"Waist Size"</span>,
            "<span class="hljs-attr">variation_name</span>": <span class="hljs-string">"30"</span>,
            "<span class="hljs-attr">location_name</span>": <span class="hljs-string">"Awesome Shop"</span>,
            "<span class="hljs-attr">location_id</span>": <span class="hljs-number">1</span>,
            "<span class="hljs-attr">variation_id</span>": <span class="hljs-number">3</span>
        }
    ],
    "<span class="hljs-attr">links</span>": {
        "<span class="hljs-attr">first</span>": <span class="hljs-string">"http:\/\/local.pos.com\/connector\/api\/product-stock-report?page=1"</span>,
        "<span class="hljs-attr">last</span>": <span class="hljs-string">"http:\/\/local.pos.com\/connector\/api\/product-stock-report?page=22"</span>,
        "<span class="hljs-attr">prev</span>": <span class="hljs-literal">null</span>,
        "<span class="hljs-attr">next</span>": <span class="hljs-string">"http:\/\/local.pos.com\/connector\/api\/product-stock-report?page=2"</span>
    },
    "<span class="hljs-attr">meta</span>": {
        "<span class="hljs-attr">current_page</span>": <span class="hljs-number">1</span>,
        "<span class="hljs-attr">from</span>": <span class="hljs-number">1</span>,
        "<span class="hljs-attr">last_page</span>": <span class="hljs-number">22</span>,
        "<span class="hljs-attr">path</span>": <span class="hljs-string">"http:\/\/local.pos.com\/connector\/api\/product-stock-report"</span>,
        "<span class="hljs-attr">per_page</span>": <span class="hljs-number">3</span>,
        "<span class="hljs-attr">to</span>": <span class="hljs-number">3</span>,
        "<span class="hljs-attr">total</span>": <span class="hljs-number">66</span>
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET connector/api/product-stock-report</code></p>
<!-- END_3735fc8265b24a44289e78c671b7e198 -->
<!-- START_bcba924904cb332c44b32be37a5ae3d6 -->
<div name="get-notifications" data-unique="get-notifications"></div><h2 id="get-notifications">Get notifications</h2>
<p><br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre style="display: block;"><code class="language-bash hljs">curl -X GET \
    -G <span class="hljs-string">"https://app.azhasoft.com/connector/api/notifications"</span> \
    -H <span class="hljs-string">"Content-Type: application/json"</span> \
    -H <span class="hljs-string">"Accept: application/json"</span> \
    -H <span class="hljs-string">"Authorization: Bearer {token}"</span></code></pre>
<pre style="display: none;"><code class="language-javascript hljs"><span class="hljs-keyword">const</span> url = <span class="hljs-keyword">new</span> URL(
    <span class="hljs-string">"https://app.azhasoft.com/connector/api/notifications"</span>
);

<span class="hljs-keyword">let</span> headers = {
    <span class="hljs-string">"Content-Type"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Accept"</span>: <span class="hljs-string">"application/json"</span>,
    <span class="hljs-string">"Authorization"</span>: <span class="hljs-string">"Bearer {token}"</span>,
};

fetch(url, {
    method: <span class="hljs-string">"GET"</span>,
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; <span class="hljs-built_in">console</span>.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json hljs">{
    "<span class="hljs-attr">data</span>": [
        {
            "<span class="hljs-attr">msg</span>": <span class="hljs-string">"Payroll for August\/2020 added by Mr. Super Admin. Reference No. 2020\/0002"</span>,
            "<span class="hljs-attr">icon_class</span>": <span class="hljs-string">"fas fa-money-bill-alt bg-green"</span>,
            "<span class="hljs-attr">link</span>": <span class="hljs-string">"http:\/\/local.pos.com\/hrm\/payroll"</span>,
            "<span class="hljs-attr">read_at</span>": <span class="hljs-literal">null</span>,
            "<span class="hljs-attr">created_at</span>": <span class="hljs-string">"3 hours ago"</span>
        }
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET connector/api/notifications</code></p>
<!-- END_bcba924904cb332c44b32be37a5ae3d6 -->
      </div>
      <div class="dark-box">
                        <div class="lang-selector">
                                    <a href="https://app.azhasoft.com/docs/#" data-language-name="bash" class="active">bash</a>
                                    <a href="https://app.azhasoft.com/docs/#" data-language-name="javascript">javascript</a>
                              </div>
                </div>
    </div>
  
</body></html>