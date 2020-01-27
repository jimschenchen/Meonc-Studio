<?php


$lyrics = [
    "But we were dancing, dancing with our hands tied, hands tied.",
    "In your fantasy, dream about me, and all that we could do this emotion.",
    "When I'm close to you, we blend into, my favourite color.",
    "Worlds fly by, drove by your place and stopped again tonight.",
    "I really wanna stop but I just got the taste for it.",
    "I don't want 'em back, I just want you back in my bed.",
    "Hey what's up, it's been a while, talkin' 'bout it's not my style.",
    "This probably gonna sound wrong, promise it won't last long.",
    "I hear thunder in the distance, and it hits me in an instant.",
    "I feel the cool wind coming, end before the summer rain.",
    "I see the sky staring into the blue like it's not gonna end.",
    "Is anyone there? Oh-oh. Play.",
];

$rand = rand(0, count($lyrics) - 1);


?>



<div class="hero">
    <div class="center">
        <h1>404</h1>
        <p><?php echo $lyrics[$rand] ?></p>
    </div>
</div>