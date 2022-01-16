<?php
namespace CarloNicora\Minimalism\Services\Discord\Enums;

enum DiscordFlag: int
{
    case CROSSPOSTED=0b1; //this message has been published to subscribed channels (via Channel Following)
    case IS_CROSSPOST=0b10; //this message originated from a message in another channel (via Channel Following)
    case SUPPRESS_EMBEDS=0b100;	//do not include any embeds when serializing this message
    case SOURCE_MESSAGE_DELETED=0b1000;	//the source message for this crosspost has been deleted (via Channel Following)
    case URGENT=0b10000; //this message came from the urgent message system
    case HAS_THREAD=0b100000; //this message has an associated thread, with the same id as the message
    case EPHEMERAL=0b1000000; //this message is only visible to the user who invoked the Interaction
    case LOADING=0b10000000; //this message is an Interaction Response and the bot is "thinking"
}