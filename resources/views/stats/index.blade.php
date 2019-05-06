<!DOCTYPE html>
<html lang="en">
<head>

    <title>Statistics</title>
</head>
<body>
    @if(Auth::user()->userType == "User")
        <script>window.location = "/";</script>
    @endif

    <div>
      <h1>Total Amount of Responses: {{count($userResponses)}} </h1>
    </div>

    <div class="table-responsive">
            <table>
                    <caption>
                      Confusion Matrix
                    </caption>
                    <col>
                    <col>
                    <colgroup span="4"></colgroup>
                    <thead>
                      <tr>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th colspan="2" scope="colgroup">Actual Answer</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th></th>
                        <th></th>
                        <th>Yes</th>
                        <th>No</th>
                      </tr>
                      <tr>
                        <th rowspan="2" scope="rowgroup">Given Answer</th>
                        <th scope="row">Yes</th>
                        <td>{{count($truePos)}} </td>
                        <td>{{count($falsePos)}} </td>
                      </tr>
                      <tr>
                        <th scope="row">No</th>
                        <td>{{count($falseNeg)}} </td>
                        <td>{{count($trueNeg)}} </td>
                      </tr>
                    </tbody>
                  </table>
        </div>

        <div>
          <p>True Positive Rate: {{$sensitivity}} </p>
          <p>True Negative Rate: {{$specifity}} </p>
          <p>Positive Predictive Value: {{$ppv}} </p>
          <p>Negative Predictive Value: {{$npv}} </p>
          <p>False Negative Rate: {{$fnr}}  </p>
          <p>False Positive Rate: {{$fpr}} </p>
          <p>False Discovery Rate: {{$fdr}}  </p>
          <p>False Omission Rate: {{$for}} </p>
        </div>

</body>
</html>