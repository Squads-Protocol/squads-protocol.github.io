<?
include $_SERVER['DOCUMENT_ROOT'].'/controllers/controller.php';
$templates->head("Disclaimer");
$templates->links_head(["css"=>['disclaimer']])?>

<?$templates->load('header')?>

<section class="section-disclaimer">
    <div class="container-xl">
        <h1>PROTOCOL DISCLAIMER</h1>
        <p>Squads is a decentralized protocol that helps web3-native teams organize, make decisions on-chain and manage digital assets together using codified membership, multi-signature wallets (multi-sigs) called “Vaults,” and tokenless, on-chain voting for governance. Your use of the Squads protocol involves various risks, including, but not limited to, risks inherent to cryptographic systems and blockchain-based networks. Before using the Squads protocol, you should review the relevant documentation to make sure you understand how Squads protocol works.</p>
        <p>THE SQUADS PROTOCOL IS PROVIDED “AS IS”, AT YOUR OWN RISK, AND WITHOUT WARRANTIES OF ANY KIND. Although SELIMOR INVESTMENTS LIMITED (“Selimor”) developed the initial code for the Squads protocol, Selimor does not provide, own, or control the Squads protocol, which is run by smart contracts deployed on the Solana blockchain. No developer or entity involved in creating the Squads protocol will be liable for any claims or damages whatsoever associated with your use, inability to use, or your interaction with other users of, the Squads protocol, including any direct, indirect, incidental, special, exemplary, punitive or consequential damages, or loss of profits, cryptocurrencies, tokens, or anything else of value.</p>
    </div>
</section>

<?$templates->load('footer')?>
<?$templates->script_head()?>
