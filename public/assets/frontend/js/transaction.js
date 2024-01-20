// if (typeof window.ethereum !== 'undefined') {
//     window.web3 = new Web3(window.ethereum);
//
//     // Request account access
//     window.ethereum.enable()
//         .then(function (accounts) {
//             if (accounts.length === 0) {
//                 console.error('User not logged in. Please log in to MetaMask.');
//                 // You may want to redirect the user to a login page or display a message.
//             } else {
//                 console.log('User logged in:', accounts[0]);
//                 // Continue with the application logic or call the sendBNB function, etc.
//             }
//         })
//         .catch(function (error) {
//             console.error('Error connecting to MetaMask:', error);
//             // Handle the error (display a message to the user, etc.)
//         });
// } else {
//     console.error('MetaMask not detected!');
// }
//
// // function to send BNB
//
// async function sendBNB(toAddress, amount) {
//     const accounts = await window.web3.eth.getAccounts();
//
//     const transactionParameters = {
//         to: toAddress,
//         value: window.web3.utils.toHex(window.web3.utils.toWei(amount, 'ether')),
//         gas: '0x76c0', // adjust gas limit accordingly
//         gasPrice: '0x12a05f200', // adjust gas price accordingly
//         from: accounts[0],
//     };
//
//     try {
//         const transactionHash = await window.web3.eth.sendTransaction(transactionParameters);
//         console.log('Transaction Hash:', transactionHash);
//     } catch (error) {
//         console.error('Transaction Error:', error);
//     }
// }
//
// document.getElementById('sendBnb').addEventListener('click', function () {
//     // Get the recipient address and amount from the input fields
//     const recipientAddress = document.getElementById('recipientAddressInput').value;
//     const amount = document.getElementById('amountInput').value;
//
//     // Check if the recipient address and amount are valid
//     if (!recipientAddress || isNaN(amount) || amount <= 0) {
//         console.error('Invalid recipient address or amount');
//         return;
//     }
//
//     // Replace the amount with the user-entered value
//     sendBNB(recipientAddress, amount);
// });
// // show bnb
// async function displayBNBBalance() {
//     const accounts = await window.web3.eth.getAccounts();
//     const address = accounts[0];
//     const balance = await window.web3.eth.getBalance(address);
//     const bnbBalance = window.web3.utils.fromWei(balance, 'ether');
//     // Update the UI with the BNB balance
//     document.getElementById('bnbBalance').innerText = `BNB Balance: ${bnbBalance} BNB`;
// }
//
// // Initial call to display BNB balance
// displayBNBBalance();
//
//
if (typeof window.ethereum !== 'undefined') {
    window.web3 = new Web3(window.ethereum);

    // Request account access
    window.ethereum.enable()
        .then(function (accounts) {
            if (accounts.length === 0) {
                console.error('User not logged in. Please log in to MetaMask.');
                // You may want to redirect the user to a login page or display a message.
            } else {
                console.log('User logged in:', accounts[0]);
                // Continue with the application logic or call the sendBNB function, etc.
            }
        })
        .catch(function (error) {
            console.error('Error connecting to MetaMask:', error);
            // Handle the error (display a message to the user, etc.)
        });
} else {
    document.getElementById('connectButton').addEventListener('click',function (){
        alert('Hãy cài đặt ứng dụng metamask trên trình duyệt này !');
    })
}

// function to send BNB

async function sendBNB(toAddress, amount) {
    const accounts = await window.web3.eth.getAccounts();

    const transactionParameters = {
        to: toAddress,
        value: window.web3.utils.toHex(window.web3.utils.toWei(amount, 'ether')),
        gas: '0x76c0', // adjust gas limit accordingly
        gasPrice: '0x12a05f200', // adjust gas price accordingly
        from: accounts[0],
    };

    try {
        const transactionHash = await window.web3.eth.sendTransaction(transactionParameters);
        console.log('Transaction Hash:', transactionHash);
    } catch (error) {
        console.error('Transaction Error:', error);
    }
}

document.getElementById('sendBnb').addEventListener('click', function () {
    // Get the recipient address and amount from the input fields
    const recipientAddress = document.getElementById('recipientAddressInput').value;
    const amount = document.getElementById('amountInput').value;

    // Check if the recipient address and amount are valid
    if (!recipientAddress || isNaN(amount) || amount <= 0) {
        console.error('Invalid recipient address or amount');
        return;
    }

    // Replace the amount with the user-entered value
    sendBNB(recipientAddress, amount);
});
