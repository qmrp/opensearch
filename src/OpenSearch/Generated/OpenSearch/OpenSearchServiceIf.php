<?php 
namespace OpenSearch\Generated\OpenSearch;
/**
 * Autogenerated by Thrift Compiler (0.10.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */

interface OpenSearchServiceIf {
  /**
   * @param string $path
   * @param array $params
   * @param string $method
   * @return string
   * @throws \OpenSearch\Generated\Common\OpenSearchException
   * @throws \OpenSearch\Generated\Common\OpenSearchClientException
   */
  public function call($path, array $params, $method);
}
 ?>