<?php namespace Waapa\Model\ValueObject;

class Excerpt
{

    private $value;
    private $length;

    public function __construct($string, $length)
    {
        $this->value = $string;
        $this->length = $length;
    }

    public function __toString()
    {
        return $this->convert($this->value, $this->length, '');
    }

    /**
     * https://gist.github.com/wpscholar/8363040
     */
    public function convert( $content, $length = 40, $more = '...' )
    {
        $excerpt = strip_tags( trim( $content ) );
        $words = str_word_count( $excerpt, 2 );
        if ( count( $words ) > $length ) {
            $words = array_slice( $words, 0, $length, true );
            end( $words );
            $position = key( $words ) + strlen( current( $words ) );
            $excerpt = substr( $excerpt, 0, $position ) . $more;
        }
        return $excerpt;
    }
}