<?php

function replaceDashToSpace((string)$string)
{
  return str_replace(' ', '-', $string);
}

echo replaceDashToSpace("Talal Danoun");
