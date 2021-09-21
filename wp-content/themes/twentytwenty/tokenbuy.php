<?php /* Template Name: token buy */?>
<html>
    <head>
        <title>Token Buy</title>
        <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
        <link rel="icon" href="https://ramlogics.com/Partay-Token/wp-content/uploads/2021/06/cropped-ptoken-p-32x32.png" sizes="32x32" />
        <link rel="icon" href="https://ramlogics.com/Partay-Token/wp-content/uploads/2021/06/cropped-ptoken-p-192x192.png" sizes="192x192" />
        <link rel="apple-touch-icon" href="https://ramlogics.com/Partay-Token/wp-content/uploads/2021/06/cropped-ptoken-p-180x180.png" />
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <link rel="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" />
    </head>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: "Poppins", sans-serif; 
        }
        a{
            color:#ff0012;
        }
        #style-3::-webkit-scrollbar-track
        {
        	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
        	background-color: #164a41;
        }
        
        #style-3::-webkit-scrollbar
        {
        	width: 6px;
        	background-color: #164a41;
        }
        
        #style-3::-webkit-scrollbar-thumb
        {
        	background-color: #f20315;
        }

        .container-fluid {
            width: 100%;
        }
        .btn-primary {
            color: #fff;
            border-style: none;
            border-radius: 0px;
            padding: 15px 30px;
            text-transform: capitalize;
            margin: 5px 15px;
            background-color: #164a41;
            font-size: 19px;
        }
        .banner {
            background-color: #1c242f;
            background-image: url(http://www.ramlogics.com/Partay-Token/wp-content/uploads/2021/06/pattern-muscari-light.png);
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            min-height: 100%;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            margin: 0px;
            padding: 0px;
            left: 0px;
            top: 0px;
            z-index: -1;
        }
        div#prepare {
            display: grid;
            justify-content: center;
            text-align: center;
        }
        .logo,
        .logo_inner {
            margin: 1rem 1rem;
        }
        .logo img {
            width: 266px;
        }
        .logo_inner img {
            height: 111px;
        }
        p,
        h3 {
            color: #fff;
        }
        h3 {
            background-color: #000000ad;
            padding: 1rem 0rem;
            margin: 0rem 1rem;
        }
        table.table.table-listing {
            overflow-x: auto;
        }
        table th,
        table td {
            white-space: nowrap;
        }

        th {
            color: #fff;
        }
        tbody#tr_data {
            color: #ffffff;
            background-color: #2a3646;
        }
        .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th { 
            border-top: 1px solid #70827f;
        }
        .details p {
            display: flex;
            justify-content: space-between;
        }
       .wallet_buttons {
            margin-top: 3rem;
        }
        .logo_inner {
            padding-bottom: 20px;
        }
        .form-control {
            color: #000;
        }
        .details {
            margin: 0rem 1.4rem;
            background-color: #2a3646;
            padding: 1rem 1.5rem;
            border-radius: 5px;
        }
        .text_danger {
            color: #f20315 !important;
        }
        .table_style {
            /*overflow-x:auto;*/
            padding: 1rem;
        }
        .table>thead>tr>th { 
            border-bottom: 1px solid #555b63;
            font-weight: 500;
        }
        @media only screen and (max-width: 425px) {
            .logo_inner img {
                height: 60px;
            }
            .details {
                margin: 0rem;
                padding: 1rem 0rem;
                overflow: auto;
            }
            .details p {
                display: block;
            }
            .btn-primary { 
                padding: 9px 28px; 
            }
        }
        @media only screen and (max-width: 1024px) {
            .table_style {
                overflow-x: auto;
                padding: 1rem;
            }
        }
    </style>
    <body class="scrollbar" id="style-3">
        <!-- Construct a Bootstrap layout -->
        <div class="banner">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div id="prepare">
                            <div class="logo">
                                <a href="https://ramlogics.com/Partay-Token/" target="_blank"><img src="https://ramlogics.com/Partay-Token/wp-content/uploads/2021/06/partay-token-new-2.png" alt="" /></a>
                            </div>
                            <button class="btn btn-primary" id="btn-connect" onclick="metamask()">
                                Connect wallet
                            </button>
                        </div>
                        <div id="connected" style="display: none;">
                            <div class="container" id="network">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="logo_inner">
                                            <a href="https://ramlogics.com/Partay-Token/" target="_blank"><img src="https://ramlogics.com/Partay-Token/wp-content/uploads/2021/06/partay-token-new-2.png" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="input_fields">
                                            <div class="form-group col-md-12 animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.4s" style="animation-delay: 0.4s; opacity: 1;">
                                                <input type="number" required="required" placeholder="Number Of Token *" id="formGroupExampleInput" class="form-control" name="number" onkeyup="bnbValue_calc(provider)" />
                                            </div>
                                            <div class="form-group col-md-12 animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.6s" style="animation-delay: 0.6s; opacity: 1;">
                                                <input type="disable" required="required" placeholder="Number of ETH *" id="formGroupExampleInput2" class="form-control" name="number" />
                                            </div>
                                            <div id="alert-msg" class="alert-msg text-center"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="details">
                                            <p><strong class="text_danger">Connected blockchain:</strong> <span id="network-name"></span></p>
                                            <p><strong class="text_danger">Selected account:</strong> <span id="selected-account"></span></p>
                                            <p><strong class="text_danger">Balance:</strong> <span id="selected-balance"></span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="wallet_buttons">
                                            <button class="btn btn-primary" id="btn-transaction" onclick="buyToken()">
                                                Pay
                                            </button>
                                            <button class="btn btn-primary" id="btn-disconnect">
                                                Disconnect wallet
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <hr />
                            </div>
                            <div class="">
                                <h3 class="rounded-pill">All ERC20 Transaction</h3>
                                <div class="table_style">
                                    <table class="table table-listing">
                                        <thead>
                                            <tr class="" style="background-image: linear-gradient(170deg, #164a41 0%, #f20315 100%)">
                                                <th>Hash</th>
                                                <th>Address</th>
                                                <th>Transaction Type</th>
                                                <th>Value</th>
                                                <th>Token Name</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tr_data">
                                            <script>
                                                function display_history(address) {
                                                    var requestOptions = {
                                                        method: "GET",
                                                        redirect: "follow",
                                                    };

                                                    fetch(
                                                        "https://api-ropsten.etherscan.io/api?module=account&action=tokentx&contractaddress=0x016ae5db1c0674039be7e7b92f0fddce069e11ef&address=" +
                                                            address +
                                                            "&page=1&offset=100&sort=asc&apikey=7AI7GWHRVD6WC64MQRN4D6F3ABEXBVD6S8",
                                                        requestOptions
                                                    )
                                                        .then((response) => response.json())
                                                        .then((result) => {
                                                            var message = document.createElement("div");
                                                            var mess = [];
                                                            if (result.status == 0) {
                                                                message.append(result.message);
                                                            } else {
                                                                mess = result.result;
                                                                for (var i = 0; i < mess.length; i++) {
                                                                    let element = document.createElement("tr");
                                                                    element.innerHTML =
                                                                        "<td class='text-warning hover-primary'><a href='https://ropsten.etherscan.io/tx/" +
                                                                        mess[i].hash +
                                                                        "' target='_blank'>See Hash</td><td>" +
                                                                        mess[i].from +
                                                                        "</td><td>" +
                                                                        mess[i].to +
                                                                        "</td><td>" +
                                                                        mess[i].value / 1000000000 +
                                                                        "</td><td>" +
                                                                        mess[i].tokenName +
                                                                        "</td>";
                                                                    message.append(element);
                                                                }
                                                            }
                                                            document.getElementById("tr_data").innerHTML = message.innerHTML;
                                                        })
                                                        .catch((error) => console.log("error", error));
                                                }
                                            </script>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <br />
                    </div>
                </div>
            </div>
        </div>
        <div id="templates" style="display: none;">
            <template id="template-balance">
                <tr>
                    <th class="address"></th>
                    <td class="balance"></td>
                </tr>
            </template>
        </div>
        <script type="text/javascript" src="https://unpkg.com/web3@1.2.11/dist/web3.min.js"></script>
        <script type="text/javascript" src="https://unpkg.com/web3modal@1.9.0/dist/index.js"></script>
        <script type="text/javascript" src="https://unpkg.com/evm-chains@0.2.0/dist/umd/index.min.js"></script>
        <script type="text/javascript" src="https://unpkg.com/@walletconnect/web3-provider@1.2.1/dist/umd/index.min.js"></script>
        <script type="text/javascript" src="https://unpkg.com/fortmatic@2.0.6/dist/fortmatic.js"></script>
        <script type="text/javascript" src="https://ramlogics.com/a/bundle.js"></script>
        <script>
        "use strict";
        const Web3Modal = window.Web3Modal.default;
        const WalletConnectProvider = window.WalletConnectProvider.default;
        const Fortmatic = window.Fortmatic;
        const evmChains = window.evmChains;
        const Binance= window.BinanceChain;
        let web3Modal
        let provider;
        let selectedAccount;
        let humanFriendlyBalance=0;
        let rate=0;
        async function buyToken() {
                            window.web3 = new Web3(provider);
                            let web3js = new Web3(provider);
                            let network = await web3js.eth.net.getId()
                            if(network=="1" || network=="3") {
                                await provider.enable();
                                if(provider.enable()) {
                                    const accounts = await web3js.eth.getAccounts();
                                    selectedAccount = accounts[0];
                                    const token= document.getElementById('formGroupExampleInput').value;
                                    const abi = [{"constant":true,"inputs":[],"name":"production","outputs":[{"name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"name","outputs":[{"name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"spender","type":"address"},{"name":"amount","type":"uint256"}],"name":"approve","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"totalSupply","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"sender","type":"address"},{"name":"recipient","type":"address"},{"name":"amount","type":"uint256"}],"name":"transferFrom","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"rate","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"marketing","outputs":[{"name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"decimals","outputs":[{"name":"","type":"uint8"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"_rate","type":"uint256"}],"name":"setRate","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"spender","type":"address"},{"name":"addedValue","type":"uint256"}],"name":"increaseAllowance","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"account","type":"address"},{"name":"amount","type":"uint256"}],"name":"mint","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[],"name":"BuyToken","outputs":[{"name":"","type":"bool"}],"payable":true,"stateMutability":"payable","type":"function"},{"constant":false,"inputs":[{"name":"amount","type":"uint256"}],"name":"burn","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"_admin","type":"address"},{"name":"_maketing","type":"address"},{"name":"_production","type":"address"}],"name":"team_address","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[{"name":"account","type":"address"}],"name":"balanceOf","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"account","type":"address"},{"name":"amount","type":"uint256"}],"name":"burnFrom","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"owner","outputs":[{"name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"symbol","outputs":[{"name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"account","type":"address"}],"name":"addMinter","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[],"name":"renounceMinter","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"spender","type":"address"},{"name":"subtractedValue","type":"uint256"}],"name":"decreaseAllowance","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"recipient","type":"address"},{"name":"amount","type":"uint256"}],"name":"transfer","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[{"name":"account","type":"address"}],"name":"isMinter","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[{"name":"owner","type":"address"},{"name":"spender","type":"address"}],"name":"allowance","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"admin_fees","type":"uint256"},{"name":"product_fees","type":"uint256"},{"name":"marketing_fees","type":"uint256"}],"name":"commision","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"admin","outputs":[{"name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"inputs":[],"payable":false,"stateMutability":"nonpayable","type":"constructor"},{"anonymous":false,"inputs":[{"indexed":true,"name":"account","type":"address"}],"name":"MinterAdded","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"name":"account","type":"address"}],"name":"MinterRemoved","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"name":"from","type":"address"},{"indexed":true,"name":"to","type":"address"},{"indexed":false,"name":"value","type":"uint256"}],"name":"Transfer","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"name":"owner","type":"address"},{"indexed":true,"name":"spender","type":"address"},{"indexed":false,"name":"value","type":"uint256"}],"name":"Approval","type":"event"}]
                                    const cAddress = '0x016Ae5dB1C0674039Be7e7b92f0FDdCe069E11eF';
                                    const contract = new web3.eth.Contract(abi, cAddress);
                                    contract.methods.rate().call({from : selectedAccount })
                                        .then(result => {
                                            result=result/(10**9);
                                            rate=token/result;
                                            contract.methods.BuyToken().send({
                                                  from:selectedAccount,
                                                  value: web3.utils.toWei(rate.toString(), 'ether')
                                                }, (err, transactionId) => {
                                                  if  (err) {
                                                    swal('warning','Payment decline by user','warning');
                                                  } else { 
                                                      if (screen.width < 1024) {
                                                            swal('success','Payment successful: '+transactionId,'success');
                                                      }else{
                                                        Swal.fire({
                                                              title: 'Payment Sucessuful',
                                                              icon: 'success',
                                                              width: 600,
                                                              height: 400,
                                                              padding: '3em',
                                                              html:
                                                              '<a href="https://ropsten.etherscan.io/tx/'+transactionId+'">See the transaction on bscscan</a> <br>' +
                                                                'Add Partay token in <b>MetaMask</b><br> ' +
                                                                'Click on "add" token button ',
                                                              showCloseButton: true,
                                                              showCancelButton: true,
                                                              focusConfirm: false,
                                                              confirmButtonText:
                                                                'Add token',
                                                              confirmButtonAriaLabel: 'Thumbs up, great!',
                                                              cancelButtonText:
                                                                'Close',
                                                              cancelButtonAriaLabel: 'Thumbs down'
                                                            }).then((result)=>{
                                                                if (result.isConfirmed) {
                                                                    add();
                                                                }
                                                                
                                                            });
                                                      }
                                                        refreshAccountData();
                                                  }
                                                  
                                                  });
                                            
                                    });
                               }     
                            } else {
                                swal('error', "Your are not Connected to Bsc Mainet", "error");
                            }
                        
                    }
                    
        async function add(){
            const tokenAddress = '0x016Ae5dB1C0674039Be7e7b92f0FDdCe069E11eF';
            const tokenSymbol = 'PRTY';
            const tokenDecimals = 9;
            const tokenImage = 'https://ramlogics.com/Partay-Token/wp-content/uploads/2021/06/partay-token-new-2.png';
            try {
                const wasAdded = await ethereum.request({
                    method: 'wallet_watchAsset',
                    params: {
                      type: 'ERC20', // Initially only supports ERC20, but eventually more!
                      options: {
                        address: tokenAddress, // The address that the token is at.
                        symbol: tokenSymbol, // A ticker symbol or shorthand, up to 5 chars.
                        decimals: tokenDecimals, // The number of decimals in the token
                        image: tokenImage, // A string url of the token logo
                      },
                    },
                });
                if (wasAdded) {
                    swal('Thanks for your interest!');
                } else {
                    swal('Your loss!');
                }
            } catch (error) {
              swal(error);
            }
        }   
        async function fetchAccountData(provider) {
          const web3 = new Web3(provider);
          const chainId = await web3.eth.getChainId();
          const chainData = evmChains.getChain(chainId);
          document.querySelector("#network-name").textContent = chainData.name;
          const accounts = await web3.eth.getAccounts();
          selectedAccount = accounts[0];
          document.querySelector("#selected-account").textContent = selectedAccount;
          const balance = await web3.eth.getBalance(selectedAccount);
          const ethBalance = web3.utils.fromWei(balance, "ether");
           humanFriendlyBalance = parseFloat(ethBalance).toFixed(4);
          document.querySelector("#selected-balance").textContent = humanFriendlyBalance;
          setInterval(function(){display_history(selectedAccount)}, 10000);
          document.querySelector("#prepare").style.display = "none";
          document.querySelector("#connected").style.display = "block";
          await bnbValue_calc(provider);
        }
        async function refreshAccountData(provider) {
            setInterval(async function(){
                await fetchAccountData(provider);
            }, 5000);
          <!--document.querySelector("#connected").style.display = "none";-->
          <!--document.querySelector("#prepare").style.display = "block";-->
          document.querySelector("#btn-connect").setAttribute("disabled", "disabled")
          document.querySelector("#btn-connect").removeAttribute("disabled")
        }
        async function onConnect() {
          try {
                provider = new WalletConnectProvider({
                      infuraId: "4e990aac9bc9418b8112eb1ed524cf91",
                            rpc: {
                                56: "https://bsc-dataseed.binance.org/",
                            },
                            chainId: 56,
                          qrcode: true,
                          qrcodeModalOptions: {
                            mobileLinks: [
                              "metamask",
                              "trust",
                            ],
                          },
                    });
                await provider.enable();
                const web3 = new Web3(provider);
                let chainId = await web3.eth.getChainId(); 
                setTimeout( async function(){ 
                      if(chainId == 56){
                          await refreshAccountData(provider);
                        document.querySelector("#alert-error-https").style.display = "none";
                      }else{
                          onDisconnect(); 
                        }
                }, 5000);
        
          
          } catch(e) {
            return;
          }
    }
     async  function metamask() {
              try { window.ethereum.enable();
                    provider = await window.web3.currentProvider;
                    await refreshAccountData(provider);
              } catch(e) {
                return;
              }
           
    }
        async function onDisconnect() {
          if(provider.close) {
            await provider.close();
            provider = null;
          }
          selectedAccount = null;
          document.querySelector("#prepare").style.display = "block";
          document.querySelector("#connected").style.display = "none";
}
        window.addEventListener('load', async () => {
                document.querySelector("#btn-disconnect").addEventListener("click", onDisconnect);
    });
        async function bnbValue_calc(provider) {
                    const bnbValue= document.getElementById('formGroupExampleInput').value;
                    let web3 = new Web3(provider);
                    const accounts = await web3.eth.getAccounts();
                    selectedAccount = accounts[0];
                    const abi = [{"constant":true,"inputs":[],"name":"production","outputs":[{"name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"name","outputs":[{"name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"spender","type":"address"},{"name":"amount","type":"uint256"}],"name":"approve","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"totalSupply","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"sender","type":"address"},{"name":"recipient","type":"address"},{"name":"amount","type":"uint256"}],"name":"transferFrom","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"rate","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"marketing","outputs":[{"name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"decimals","outputs":[{"name":"","type":"uint8"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"_rate","type":"uint256"}],"name":"setRate","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"spender","type":"address"},{"name":"addedValue","type":"uint256"}],"name":"increaseAllowance","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"account","type":"address"},{"name":"amount","type":"uint256"}],"name":"mint","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[],"name":"BuyToken","outputs":[{"name":"","type":"bool"}],"payable":true,"stateMutability":"payable","type":"function"},{"constant":false,"inputs":[{"name":"amount","type":"uint256"}],"name":"burn","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"_admin","type":"address"},{"name":"_maketing","type":"address"},{"name":"_production","type":"address"}],"name":"team_address","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[{"name":"account","type":"address"}],"name":"balanceOf","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"account","type":"address"},{"name":"amount","type":"uint256"}],"name":"burnFrom","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"owner","outputs":[{"name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"symbol","outputs":[{"name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"account","type":"address"}],"name":"addMinter","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[],"name":"renounceMinter","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"spender","type":"address"},{"name":"subtractedValue","type":"uint256"}],"name":"decreaseAllowance","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"recipient","type":"address"},{"name":"amount","type":"uint256"}],"name":"transfer","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[{"name":"account","type":"address"}],"name":"isMinter","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[{"name":"owner","type":"address"},{"name":"spender","type":"address"}],"name":"allowance","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"admin_fees","type":"uint256"},{"name":"product_fees","type":"uint256"},{"name":"marketing_fees","type":"uint256"}],"name":"commision","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"admin","outputs":[{"name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"inputs":[],"payable":false,"stateMutability":"nonpayable","type":"constructor"},{"anonymous":false,"inputs":[{"indexed":true,"name":"account","type":"address"}],"name":"MinterAdded","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"name":"account","type":"address"}],"name":"MinterRemoved","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"name":"from","type":"address"},{"indexed":true,"name":"to","type":"address"},{"indexed":false,"name":"value","type":"uint256"}],"name":"Transfer","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"name":"owner","type":"address"},{"indexed":true,"name":"spender","type":"address"},{"indexed":false,"name":"value","type":"uint256"}],"name":"Approval","type":"event"}] ; 
                    const cAddress = '0x016Ae5dB1C0674039Be7e7b92f0FDdCe069E11eF';
                    const contract = new web3.eth.Contract(abi, cAddress);
                    contract.methods.rate().call({from : selectedAccount })
                    .then(result => {
                        result=result/(10**9);
                        rate=bnbValue/result;
                        document.getElementById('formGroupExampleInput2').value=parseFloat(rate).toFixed(6);
                    });
        }
    </script>
    </body>
</html>
