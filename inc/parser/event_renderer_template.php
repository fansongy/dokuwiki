<?php
/**
 * Autogenerated wrapper around ORIGINAL_RENDERER to trigger events for all calls
 *
 * @author Andreas Gohr <andi@splitbrain.org>
 */
if(!defined('DOKU_INC')) die('meh.');

class ORIGINAL_RENDERER_EventDispatcher extends ORIGINAL_RENDERER {
    /**
     * @var Doku_Event we reuse the same event to decrease performance hit
     */
    private $EVENT;

    /**
     * Constructor, initializes
     */
    public function __construct(){
        $dummy = null;
        $this->EVENT = new Doku_Event(null, $dummy);
    }

    /**
     * Wrap the given call and arguments in an event call
     *
     * @param $call
     * @param $arguments
     * @return mixed|null
     */
    private function _trigger_call($call, &$arguments){
        $result = null;
        $this->EVENT->name = strtoupper('RCALL_'.$this->getFormat().'_'.$call);
        $this->EVENT->data =& $arguments;
        if($this->EVENT->advise_before()){
            $result = call_user_func_array(array(parent, $call), $this->EVENT->data);
        }
        $this->EVENT->advise_after();
        $this->EVENT->data = null;
        $this->EVENT->name = null;
        return $result;
    }

    //handle plugin rendering
    /* fixme what about plugins?
    function plugin($name,$data){
        $plugin = plugin_load('syntax',$name);
        if($plugin != null){
            $plugin->render($this->getFormat(),$this,$data);
        }
    }
    */

    function nest_close() {
        return $this->_trigger_call(__FUNCTION__, func_get_args());
    }

    function document_start() {
        return $this->_trigger_call(__FUNCTION__, func_get_args());
    }

    function document_end() {
        return $this->_trigger_call(__FUNCTION__, func_get_args());
    }

    function render_TOC() {
        return $this->_trigger_call(__FUNCTION__, func_get_args());
    }

    function toc_additem($id, $text, $level) {
        return $this->_trigger_call(__FUNCTION__, func_get_args());
    }

    function header($text, $level, $pos) {
        return $this->_trigger_call(__FUNCTION__, func_get_args());
    }

    function section_open($level) {
        return $this->_trigger_call(__FUNCTION__, func_get_args());
    }

    function section_close() {
        return $this->_trigger_call(__FUNCTION__, func_get_args());
    }

    function cdata($text) {
        return $this->_trigger_call(__FUNCTION__, func_get_args());
    }

    function p_open() {
        return $this->_trigger_call(__FUNCTION__, func_get_args());
    }

    function p_close() {
        return $this->_trigger_call(__FUNCTION__, func_get_args());
    }

    function linebreak() {
        return $this->_trigger_call(__FUNCTION__, func_get_args());
    }

    function hr() {
        return $this->_trigger_call(__FUNCTION__, func_get_args());
    }

    function strong_open() {
        return $this->_trigger_call(__FUNCTION__, func_get_args());
    }

    function strong_close() {
        return $this->_trigger_call(__FUNCTION__, func_get_args());
    }

    function emphasis_open() {
        return $this->_trigger_call(__FUNCTION__, func_get_args());
    }

    function emphasis_close() {
        return $this->_trigger_call(__FUNCTION__, func_get_args());
    }

    function underline_open() {
        return $this->_trigger_call(__FUNCTION__, func_get_args());
    }

    function underline_close() {
        return $this->_trigger_call(__FUNCTION__, func_get_args());
    }

    function monospace_open() {
        return $this->_trigger_call(__FUNCTION__, func_get_args());
    }

    function monospace_close() {
        return $this->_trigger_call(__FUNCTION__, func_get_args());
    }

    function subscript_open() {
        return $this->_trigger_call(__FUNCTION__, func_get_args());
    }

    function subscript_close() {
        return $this->_trigger_call(__FUNCTION__, func_get_args());
    }

    function superscript_open() {
        return $this->_trigger_call(__FUNCTION__, func_get_args());
    }

    function superscript_close() {
        return $this->_trigger_call(__FUNCTION__, func_get_args());
    }

    function deleted_open() {
        return $this->_trigger_call(__FUNCTION__, func_get_args());
    }

    function deleted_close() {
        return $this->_trigger_call(__FUNCTION__, func_get_args());
    }

    function footnote_open() {
        return $this->_trigger_call(__FUNCTION__, func_get_args());
    }

    function footnote_close() {
        return $this->_trigger_call(__FUNCTION__, func_get_args());
    }

    function listu_open() {
        return $this->_trigger_call(__FUNCTION__, func_get_args());
    }

    function listu_close() {
        return $this->_trigger_call(__FUNCTION__, func_get_args());
    }

    function listo_open() {
        return $this->_trigger_call(__FUNCTION__, func_get_args());
    }

    function listo_close() {
        return $this->_trigger_call(__FUNCTION__, func_get_args());
    }

    function listitem_open($level) {
        return $this->_trigger_call(__FUNCTION__, func_get_args());
    }

    function listitem_close() {
        return $this->_trigger_call(__FUNCTION__, func_get_args());
    }

    function listcontent_open() {
        return $this->_trigger_call(__FUNCTION__, func_get_args());
    }

    function listcontent_close() {
        return $this->_trigger_call(__FUNCTION__, func_get_args());
    }

    function unformatted($text) {
        return $this->_trigger_call(__FUNCTION__, func_get_args());
    }

    function php($text) {
        return $this->_trigger_call(__FUNCTION__, func_get_args());
    }

    function phpblock($text) {
        return $this->_trigger_call(__FUNCTION__, func_get_args());
    }

    function html($text) {
        return $this->_trigger_call(__FUNCTION__, func_get_args());
    }

    function htmlblock($text) {
        return $this->_trigger_call(__FUNCTION__, func_get_args());
    }

    function preformatted($text) {
        return $this->_trigger_call(__FUNCTION__, func_get_args());
    }

    function quote_open() {
        return $this->_trigger_call(__FUNCTION__, func_get_args());
    }

    function quote_close() {
        return $this->_trigger_call(__FUNCTION__, func_get_args());
    }

    function file($text, $lang = null, $file = null ) {
        return $this->_trigger_call(__FUNCTION__, func_get_args());
    }

    function code($text, $lang = null, $file = null ) {
        return $this->_trigger_call(__FUNCTION__, func_get_args());
    }

    function acronym($acronym) {
        return $this->_trigger_call(__FUNCTION__, func_get_args());
    }

    function smiley($smiley) {
        return $this->_trigger_call(__FUNCTION__, func_get_args());
    }

    function wordblock($word) {
        return $this->_trigger_call(__FUNCTION__, func_get_args());
    }

    function entity($entity) {
        return $this->_trigger_call(__FUNCTION__, func_get_args());
    }

    // 640x480 ($x=640, $y=480)
    function multiplyentity($x, $y) {
        return $this->_trigger_call(__FUNCTION__, func_get_args());
    }

    function singlequoteopening() {
        return $this->_trigger_call(__FUNCTION__, func_get_args());
    }

    function singlequoteclosing() {
        return $this->_trigger_call(__FUNCTION__, func_get_args());
    }

    function apostrophe() {
        return $this->_trigger_call(__FUNCTION__, func_get_args());
    }

    function doublequoteopening() {
        return $this->_trigger_call(__FUNCTION__, func_get_args());
    }

    function doublequoteclosing() {
        return $this->_trigger_call(__FUNCTION__, func_get_args());
    }

    function camelcaselink($link) {
        return $this->_trigger_call(__FUNCTION__, func_get_args());
    }

    function locallink($hash, $name = NULL) {
        return $this->_trigger_call(__FUNCTION__, func_get_args());
    }

    // $link like 'wiki:syntax', $title could be an array (media)
    function internallink($link, $title = NULL) {
        return $this->_trigger_call(__FUNCTION__, func_get_args());
    }

    // $link is full URL with scheme, $title could be an array (media)
    function externallink($link, $title = NULL) {
        return $this->_trigger_call(__FUNCTION__, func_get_args());
    }

    function rss ($url,$params) {
        return $this->_trigger_call(__FUNCTION__, func_get_args());
    }

    // $link is the original link - probably not much use
    // $wikiName is an indentifier for the wiki
    // $wikiUri is the URL fragment to append to some known URL
    function interwikilink($link, $title = NULL, $wikiName, $wikiUri) {
        return $this->_trigger_call(__FUNCTION__, func_get_args());
    }

    // Link to file on users OS, $title could be an array (media)
    function filelink($link, $title = NULL) {
        return $this->_trigger_call(__FUNCTION__, func_get_args());
    }

    // Link to a Windows share, , $title could be an array (media)
    function windowssharelink($link, $title = NULL) {
        return $this->_trigger_call(__FUNCTION__, func_get_args());
    }

    function emaillink($address, $name = NULL) {
        return $this->_trigger_call(__FUNCTION__, func_get_args());
    }

    function internalmedia ($src, $title=NULL, $align=NULL, $width=NULL,
                            $height=NULL, $cache=NULL, $linking=NULL) {
        return $this->_trigger_call(__FUNCTION__, func_get_args());
    }

    function externalmedia ($src, $title=NULL, $align=NULL, $width=NULL,
                            $height=NULL, $cache=NULL, $linking=NULL) {
        return $this->_trigger_call(__FUNCTION__, func_get_args());
    }

    function internalmedialink (
        $src,$title=NULL,$align=NULL,$width=NULL,$height=NULL,$cache=NULL
        ) {
        return $this->_trigger_call(__FUNCTION__, func_get_args());
    }

    function externalmedialink(
        $src,$title=NULL,$align=NULL,$width=NULL,$height=NULL,$cache=NULL
        ) {
        return $this->_trigger_call(__FUNCTION__, func_get_args());
    }

    function table_open($maxcols = null, $numrows = null, $pos = null){
        return $this->_trigger_call(__FUNCTION__, func_get_args());
    }

    function table_close($pos = null){
        return $this->_trigger_call(__FUNCTION__, func_get_args());
    }

    function tablerow_open(){
        return $this->_trigger_call(__FUNCTION__, func_get_args());
    }

    function tablerow_close(){
        return $this->_trigger_call(__FUNCTION__, func_get_args());
    }

    function tableheader_open($colspan = 1, $align = NULL, $rowspan = 1){
        return $this->_trigger_call(__FUNCTION__, func_get_args());
    }

    function tableheader_close(){}

    function tablecell_open($colspan = 1, $align = NULL, $rowspan = 1){
        return $this->_trigger_call(__FUNCTION__, func_get_args());
    }

    function tablecell_close(){
        return $this->_trigger_call(__FUNCTION__, func_get_args());
    }

}


//Setup VIM: ex: et ts=4 :