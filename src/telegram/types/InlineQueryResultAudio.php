<?php

namespace skrtdev\Telegram;

use stdClass;
use skrtdev\Prototypes\simpleProto;

/**
 * Represents a link to an MP3 audio file. By default, this audio file will be sent by the user. Alternatively, you can use input_message_content to send a message with the specified content instead of the audio.
*/
class InlineQueryResultAudio extends \Telegram\InlineQueryResultAudio{

    use simpleProto;

    /** @var string Type of the result, must be voice */
    public string $type;

    /** @var string Unique identifier for this result, 1-64 bytes */
    public string $id;

    /** @var string A valid URL for the voice recording */
    public string $voice_url;

    /** @var string Recording title */
    public string $title;

    /** @var string|null Caption, 0-1024 characters after entities parsing */
    public ?string $caption = null;

    /** @var string|null Mode for parsing entities in the voice message caption. See formatting options for more details. */
    public ?string $parse_mode = null;

    /** @var int|null Recording duration in seconds */
    public ?int $voice_duration = null;

    /** @var InlineKeyboardMarkup|null Inline keyboard attached to the message */
    public ?InlineKeyboardMarkup $reply_markup = null;

    /** @var InputMessageContent|null Content of the message to be sent instead of the voice recording */
    public ?InputMessageContent $input_message_content = null;

    
}

?>
