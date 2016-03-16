<?php
namespace Robo\Task\Docker;

trait loadTasks
{
    protected function taskDockerRun($image)
    {
        return $this->task(__FUNCTION__, $image);
    }
    protected function taskDockerPull($image)
    {
        return $this->task(__FUNCTION__, $image);
    }
    protected function taskDockerBuild($path = '.')
    {
        return $this->task(__FUNCTION__, $path);
    }
    protected function taskDockerStop($cidOrResult)
    {
        return $this->task(__FUNCTION__, $cidOrResult);
    }
    protected function taskDockerCommit($cidOrResult)
    {
        return $this->task(__FUNCTION__, $cidOrResult);
    }
    protected function taskDockerStart($cidOrResult)
    {
        return $this->task(__FUNCTION__, $cidOrResult);
    }
    protected function taskDockerRemove($cidOrResult)
    {
        return $this->task(__FUNCTION__, $cidOrResult);
    }

    protected function taskDockerExec($cidOrResult)
    {
        return $this->task(__FUNCTION__, $cidOrResult);
    }
}
