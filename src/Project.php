<?php

namespace meteorTechnology\AgoraSDK;

class Project extends Api
{
    /**
     * Get all items
     *
     * @return array
     */
    public function all()
    {
        return $this->request('GET', '/projects');
    }

    /**
     * Get item
     *
     * @param string      $id
     * @param string|null $name
     * @param bool        $first
     *
     * @return array
     */
    public function find($id, $name = null, $first = true)
    {
        $result = $this->request('GET', '/project', compact('id', 'name'));

        if ($first && isset($result['projects']) && count($result['projects']) > 0) {
            return $result['projects'][0];
        }

        return $result;
    }

    /**
     * Create project
     *
     * @param string $name
     * @param bool   $enable_sign_key
     *
     * @return array
     */
    public function create(string $name, bool $enable_sign_key = true)
    {
        return $this->request('POST', '/project', compact('name', 'enable_sign_key'));
    }

    /**
     * Disable or Enable project
     *
     * @param string $id
     * @param int    $status
     *
     * @return array
     */
    public function setState(string $id, int $status)
    {
        return $this->request('POST', '/project/project_status', compact('id', 'status'));
    }

    /**
     * Delete item
     *
     * @param string $id
     *
     * @return array
     */
    public function delete(string $id)
    {
        return $this->request('DELETE', '/project', compact('id'));
    }

    /**
     * Set recording server
     *
     * @param string $id
     * @param string $recording_server
     *
     * @return array
     */
    public function setRecordConfig(string $id, string $recording_server)
    {
        return $this->request('POST', '/recording_config', compact('id', 'recording_server'));
    }

    /**
     * Disable or Enable App Certificate
     *
     * @param string $id
     * @param bool   $enable
     *
     * @return array
     */
    public function setCertStatus(string $id, bool $enable)
    {
        return $this->request('POST', '/signkey', compact('id', 'enable'));
    }

    /**
     * Reset App Certificate
     *
     * @param string $id
     *
     * @return array
     */
    public function resetCertificate(string $id)
    {
        return $this->request('POST', '/rest_signkey', compact('id'));
    }
}
